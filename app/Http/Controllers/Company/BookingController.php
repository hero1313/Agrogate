<?php

namespace App\Http\Controllers\Company;

use App\Exports\BookingExport;
use App\Http\Controllers\Controller;
use App\Mail\BookingCancelMail;
use App\Mail\BookingMail;
use App\Mail\InvoiceMail;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\Service;
use App\Models\ServiceBooking;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Booking::with(['roomBookings', 'serviceBookings', 'hotel'])
        ->where('user_id', Auth::id());

        $id = $request->input('id');
        $status = $request->input('status');
        $payment_status = $request->input('pay_status');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Add conditions based on search parameters
        if ($id) {
            $query->where('id', $id);
        }

        if ($status !== null) {
            $query->where('status', $status);
        }

        if ($payment_status) {
            $query->where('pay_status', $payment_status);
        }

        if ($start_date && $end_date) {
            $query->where(function ($query) use ($start_date, $end_date) {
                $query->whereBetween('start_date', [$start_date, $end_date])
                    ->orWhereBetween('end_date', [$start_date, $end_date])
                    ->orWhere(function ($query) use ($start_date, $end_date) {
                        $query->where('start_date', '<=', $start_date)
                            ->where('end_date', '>=', $end_date);
                    });
            });
        } elseif ($start_date) {
            $query->where('start_date', '>=', $start_date);
        } elseif ($end_date) {
            $query->where('end_date', '<=', $end_date);
        }
        if($request->excel){
            $bookings = $query->orderBy('created_at', 'desc')->get();
            return Excel::download(new BookingExport($bookings), 'Report.xlsx');
        }

        // Get the results
        $bookings = $query->orderBy('created_at', 'desc')->simplePaginate(20);

        return view('company.components.bookings', compact(['bookings']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $company = User::find($hotel->user_id);
        $room = Room::find($request->room_id);
        $uuid  = Str::uuid()->toString();
        $customId = substr(md5($uuid), 0, 13);
        $services = $request->services;

        // date modification
        $dateRange = $request->date;
        list($startDate, $endDate) = explode(' - ', $dateRange);
        $startDateObj = DateTime::createFromFormat('m/d/Y', $startDate);
        $endDateObj = DateTime::createFromFormat('m/d/Y', $endDate);
        $interval = new DateInterval('P1D');
        $datePeriod = new DatePeriod($startDateObj, $interval, $endDateObj);

        // room booking
        foreach ($datePeriod as $date) {
            $roomBooking = new RoomBooking();
            $roomBooking->booking_id = $customId;
            $roomBooking->room_id = $room->id;
            $roomBooking->price = $room->price;
            $roomBooking->date = $date->format('Y-m-d');
            $roomBooking->save();
        }

        // service booking
        foreach ($services as $item) {
            if (isset($item['service_id'])) {
                $service = Service::find($item['service_id']);
                $serviceBooking = new Servicebooking();
                $serviceBooking->booking_id = $customId;
                $serviceBooking->service_id = $item['service_id'];
                $serviceBooking->quantity = $item['quantity'];
                $serviceBooking->total_price = $service->price * $item['quantity'];
                $serviceBooking->save();
            }
        }
        // total price
        $roomBookingsPrice = RoomBooking::where('booking_id', $customId)->sum('price');
        $serviceBookingsPrice = ServiceBooking::where('booking_id', $customId)->sum('total_price');

        // booking
        $booking = new Booking();
        $booking->custom_id = $customId;
        $booking->user_id = $hotel->user_id;
        $booking->hotel_id = $hotel->id;
        $booking->check_in = $hotel->check_in;
        $booking->check_out = $hotel->check_out;
        $booking->total_price = $roomBookingsPrice + $serviceBookingsPrice;
        $booking->start_date = $startDateObj;
        $booking->end_date = $endDateObj;
        $booking->pay_method = $request->pay_method;
        $booking->visitor_name = $request->visitor_name;
        $booking->visitor_last_name = $request->visitor_last_name;
        $booking->visitor_email = $request->visitor_email;
        $booking->visitor_number = $request->visitor_number;
        $booking->visitor_id_number = $request->visitor_id_number;
        $booking->save();

        $data = (object)[
            'booking_id' => $booking->custom_id,
            'name' => $booking->visitor_name . " " . $booking->visitor_last_name,
            'email' => $booking->visitor_email,
            'number' => $booking->visitor_number,
            'total_price' => $booking->total_price,
            'start_date' => $booking->start_date,
            'end_date' => $booking->end_date,
            'hotel' => $hotel->name_ge,
            'text' => 'გთხოვთ დაადასტუროთ ჯავშანი',
        ];
        Mail::to($company->email)->send(new BookingMail((object) $data));


        return redirect()->back()->with('success', 'booking');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::find($id);

        if ($request->pay_status) {
            $booking->pay_status = $request->pay_status;
        }
        $booking->save();

        return redirect()->back()->with('success', 'booking update');
    }


    public function successStatus(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->status = 1;

        $booking->update();
        $company = User::find($booking->user_id);

        $serviceBooking = ServiceBooking::where('booking_id', $booking->custom_id)->get();
        $roomItem = RoomBooking::where('booking_id', $booking->custom_id)->first();
        $roomBooking = RoomBooking::where('booking_id', $booking->custom_id)->get();
        $totalPrice = $roomBooking->sum('price') + $serviceBooking->sum('total_price');
        $room = Room::find($roomItem->room_id);
        $hotel = Hotel::find($booking->hotel_id);
        $data = (object)[
            'booking' => $booking,
            'totalPrice' => $totalPrice,
            'room' => $room,
            'hotel' => $hotel,
            'company' => $company,
            'serviceBooking' => $serviceBooking,
            'days' => $roomBooking->count(),
        ];
        // აქ მოხდება შეტყობინების და ინვოისის გაგზავნა ერთად.
        Mail::to($booking->visitor_email)->send(new InvoiceMail($data));


        return redirect()->back()->with('success', 'booking update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function serviceBookingUpdate(Request $request, $id)
    {
        $serviceBooking = ServiceBooking::find($id);
        $service = Service::find($serviceBooking->service_id);
        $serviceBooking->quantity = $request->quantity;
        $serviceBooking->total_price = $request->quantity * $service->price;
        $serviceBooking->update();

        return redirect()->back()->with('success', 'booking update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function serviceBookingDestroy($id)
    {
        $serviceBooking = ServiceBooking::find($id);
        $serviceBooking->delete();

        return redirect()->back()->with('success', 'booking update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $booking = Booking::find($id);
        $company = User::find($booking->user_id);
        $servicesBooking = ServiceBooking::where('booking_id', $booking->custom_id)->get();
        $roomBooking = RoomBooking::where('booking_id', $booking->custom_id)->get();

        foreach ($servicesBooking as $item) {
            $item->delete();
        }
        foreach ($roomBooking as $item) {
            $item->delete();
        }
        $text = $request->text;
        $data = (object)[
            'text' => $text,
            'company' => $company,
            'id' => $booking->custom_id,
        ];
        Mail::to($booking->visitor_email)->send(new BookingCancelMail($data));
        $booking->delete();

        // აქ უნდა მოხდეს შეტყობინება რომ ეს ჯავშანი გაუქმებულია.
        return redirect()->route('company.booking.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        $serviceBooking = ServiceBooking::with('service')->where('booking_id', $booking->custom_id)->get();
        $roomItem = RoomBooking::where('booking_id', $booking->custom_id)->first();
        $roomBooking = RoomBooking::where('booking_id', $booking->custom_id)->get();
        $totalPrice = $roomBooking->sum('price') + $serviceBooking->sum('total_price');
        $room = Room::find($roomItem->room_id);
        $image = Image::where('hotel_id', $booking->hotel_id)->first();
        $hotel = Hotel::find($booking->hotel_id);
        return view('company.components.booking', compact(['booking', 'serviceBooking', 'roomBooking', 'totalPrice', 'room', 'image', 'hotel']));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function checkRoom(Request $request)
    {
        $dateRange = $request->date;
        list($startDate, $endDate) = explode(' - ', $dateRange);
        $startDateObj = DateTime::createFromFormat('m/d/Y', $startDate);
        $endDateObj = DateTime::createFromFormat('m/d/Y', $endDate);

        $hotelId = $request->hotel_id;
        $startDate = Carbon::parse($startDateObj);
        $endDate = Carbon::parse($endDateObj);

        // თარიღთა ინტერვალის გამოთვლა 
        $dateRange = [];
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $dateRange[] = $date->format('Y-m-d');
        }

        // წამოიღოს ის ოთახები რომელთა ჯავშანი არ აღემატება შესაბამისი ტიპის ოთახების რაოდენობას
        $availableRooms = Room::where('hotel_id', $hotelId)
            ->whereDoesntHave('bookings', function ($query) use ($dateRange) {
                $query->whereIn('date', $dateRange)
                    ->groupBy('room_id')
                    ->havingRaw('COUNT(*) >= rooms.quantity');
            })->get();


        return response()->json(['availableRooms' => $availableRooms]);
    }
}
