<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\FailNewHotelMail;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mail::to($user->email)->send(new MainMail((object) $data));

        $bookings = Booking::orderBy('created_at', 'desc')->get();

        return view('admin.components.dashboard', compact(['bookings']));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCompany()
    {
        $companies = User::orderBy('created_at', 'desc')->get();

        return view('admin.components.companies', compact(['companies']));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexHotel()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->get();

        return view('admin.components.hotels', compact(['hotels']));
    }

    public function showHotel($id)
    {
        $hotel = Hotel::find($id);
        $rooms = Room::where('hotel_id', $id)->orderBy('created_at', 'desc')->get();
        $services = Service::where('hotel_id', $id)->orderBy('created_at', 'desc')->get();
        $images = Image::where('hotel_id', $id)->orderBy('created_at', 'desc')->get();

        return view('admin.components.hotel', compact(['rooms', 'hotel', 'services', 'images']));
    }

    public function updateHotel(Request $request,  $id)
    {
        $hotel = Hotel::find($id);
        $company = User::find($hotel->user_id);
        if($request->permission == 0){
            $rooms = Room::where('hotel_id', $hotel->id)->get();
            $services = Service::where('hotel_id', $hotel->id)->get();
            $images = Image::where('hotel_id', $hotel->id)->get();
            $rooms->each(function($room) {
                $room->delete();
            });
            $services->each(function($service) {
                $service->delete();
            });
            $images->each(function($image) {
                $image->delete();
            });
            $hotel->delete();
        }
        elseif($request->permission == 1){
            $hotel->permission = $request->permission;
            $hotel->save();
        }
        $data = (object)[
            'text' => $request->text,
        ];
        Mail::to($company->email)->send(new FailNewHotelMail((object) $data));


        return back();
    }
    


    /**
     * Display a listing of the resource.
     */
    public function indexBooking()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();

        return view('admin.components.bookings', compact(['bookings']));
    }
    public function dashboard()
    {
        if(Auth::user()->role == 2){
            return redirect('/company/hotels');

        }
        else if(Auth::user()->role == 1){
            return redirect('/company/hotels');

        }
        else{
            return abort(403, 'წვდომა შეზღუდულია');
        }
    }


}
