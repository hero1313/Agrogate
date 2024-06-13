<?php

namespace App\Http\Controllers\Company\Service;

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
use App\Models\ServiceItem;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['roomBookings', 'serviceBookings'])->orderBy('created_at', 'desc')->get();

        return view('company.components.bookings', compact(['bookings']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $service = ServiceItem::find($id);
        $company = User::find($service->user_id);

        Mail::to($company->email)->send(new BookingMail((object) $data));


        return redirect()->back()->with('success', 'booking');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::find($id);

        if($request->pay_status){
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

        $servicesBooking = ServiceBooking::where('booking_id', $booking->custom_id)->get();
        $roomBooking = RoomBooking::where('booking_id', $booking->custom_id)->get();

        foreach($servicesBooking as $item){
            $item->delete();
        }
        foreach($roomBooking as $item){
            $item->delete();
        }
        $text = $request->text;
        $data = (object)[
            'text' => $text,
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
        $serviceBooking = ServiceBooking::where('booking_id', $booking->custom_id)->get();
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
        dd(123);
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
