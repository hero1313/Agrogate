<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\Service;
use App\Models\Servicebooking;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();

        return view('company.components.bookings', compact(['bookings']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());
        $hotel = Hotel::find($id);
        $room = Room::find($request->room);
        $customId = Str::uuid()->toString();
        $services = $request->services;


        // date modification
        $dateRange = $request->date;
        list($startDate, $endDate) = explode(' - ', $dateRange);
        $startDateObj = DateTime::createFromFormat('m/d/Y', $startDate);
        $endDateObj = DateTime::createFromFormat('m/d/Y', $endDate);
        $endDateObj->modify('+1 day');
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
            $service = Service::find($item['service_id']);
            $serviceBooking = new Servicebooking();
            $serviceBooking->booking_id = $customId;
            $serviceBooking->service_id = $item['service_id'];
            $serviceBooking->quantity = $item['quantity'];
            $serviceBooking->total_price = $service->price * $item['quantity'];
            $serviceBooking->save();
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

        return redirect()->back()->with('success', 'booking');

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
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
}
