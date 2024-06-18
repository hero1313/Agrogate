<?php

namespace App\Http\Controllers\Company\Service;

use App\Http\Controllers\Controller;
use App\Mail\BookingCancelMail;
use App\Mail\BookingMail;
use App\Mail\InvoiceMail;
use App\Mail\InvoiceServiceMail;
use App\Mail\ServiceBookingMail;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\RoomBooking;
use App\Models\Service;
use App\Models\ServiceBooking;
use App\Models\ServiceItem;
use App\Models\ServiceItemBooking;
use App\Models\ServiceItemImage;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ServiceBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = ServiceItemBooking::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('company.components.service-bookings', compact(['bookings']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->input('date'))->format('Y-m-d');
        $service = ServiceItem::find($id);
        $company = User::find($service->user_id);
        $booking = new ServiceItemBooking;
        $booking->user_id = $company->id;
        $booking->service_item_id = $id;
        $booking->quantity = $request->quantity;
        $booking->total_price = $request->quantity * $service->price;
        $booking->date = $date;
        $booking->visitor_name = $request->visitor_name;
        $booking->visitor_last_name = $request->visitor_last_name;
        $booking->visitor_email = $request->visitor_email;
        $booking->visitor_number = $request->visitor_number;
        $booking->visitor_id_number = $request->visitor_id_number;
        $booking->pay_method = $request->pay_method;        
        $booking->save();

        Mail::to($company->email)->send(new ServiceBookingMail((object) $booking));

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
        $booking = ServiceItemBooking::find($id);
        $booking->status = 1;

        $booking->update();
        $company = User::find($booking->user_id);
        $service = ServiceItem::find($booking->service_item_id);
        $data = (object)[
            'booking' => $booking,
            'company' => $company,
            'service' => $service,
        ];

        Mail::to($booking->visitor_email)->send(new InvoiceServiceMail($data));
        return redirect()->back()->with('success', 'booking update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function serviceBookingUpdate(Request $request, $id)
    {
        $serviceBooking = ServiceItemBooking::find($id);
        $service = ServiceItem::find($serviceBooking->service_id);
        $serviceBooking->quantity = $request->quantity;
        $serviceBooking->total_price = $request->quantity * $service->price;
        $serviceBooking->update();

        return redirect()->back()->with('success', 'booking update');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $booking = ServiceItemBooking::find($id);
        $company = User::find($booking->user_id);
        $text = $request->text;
        $data = (object)[
            'text' => $text,
            'company' => $company,
            'id' => $booking->id,
        ];
        Mail::to($booking->visitor_email)->send(new BookingCancelMail($data));
        $booking->delete();

        return redirect()->route('company.service.booking.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function show($id)
    {
        $booking = ServiceItemBooking::find($id);
        $service = ServiceItem::find($booking->service_item_id);
        $image = ServiceItemImage::where('service_item_id', $booking->service_item_id)->first();
        // dd($booking->service_item_id);
        return view('company.components.service-booking', compact(['booking', 'image', 'service']));

    }



    /**
     * Remove the specified resource from storage.
     */
    // public function checkRoom(Request $request)
    // {
    //     dd(123);
    //     $dateRange = $request->date;
    //     list($startDate, $endDate) = explode(' - ', $dateRange);
    //     $startDateObj = DateTime::createFromFormat('m/d/Y', $startDate);
    //     $endDateObj = DateTime::createFromFormat('m/d/Y', $endDate);

    //     $hotelId = $request->hotel_id;
    //     $startDate = Carbon::parse($startDateObj);
    //     $endDate = Carbon::parse($endDateObj);
        
    //     // თარიღთა ინტერვალის გამოთვლა 
    //     $dateRange = [];
    //     for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
    //         $dateRange[] = $date->format('Y-m-d');
    //     }

    //     // წამოიღოს ის ოთახები რომელთა ჯავშანი არ აღემატება შესაბამისი ტიპის ოთახების რაოდენობას
    //     $availableRooms = Room::where('hotel_id', $hotelId)
    //     ->whereDoesntHave('bookings', function ($query) use ($dateRange) {
    //         $query->whereIn('date', $dateRange)
    //             ->groupBy('room_id')
    //             ->havingRaw('COUNT(*) >= rooms.quantity');
    //     })->get();

        
    //     return response()->json(['availableRooms' => $availableRooms]);
    // }
}
