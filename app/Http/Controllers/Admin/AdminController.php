<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MainMail;
use App\Models\Booking;
use App\Models\Hotel;
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
        $hotel = Hotel::find($id)->get();

        return view('admin.components.hotel', compact(['hotel']));
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
        if(Auth::user()->permission == 2){
            return redirect('/company/hotels');

        }
        else if(Auth::user()->permission == 1){
            return redirect('/company/hotels');

        }
        else{
            return abort(403, 'წვდომა შეზღუდულია');
        }
    }


}