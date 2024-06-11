<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\Service;
use App\Models\Servicebooking;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
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
        $hotel = Hotel::find($id);
        $company = User::find($hotel->user_id);
        $room = Room::find($request->room_id);
        $customId = Str::uuid()->toString();
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
            if(isset($item['service_id'])){
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
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
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
