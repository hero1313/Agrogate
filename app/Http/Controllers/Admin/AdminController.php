<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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


    /**
     * Display a listing of the resource.
     */
    public function indexBooking()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();

        return view('admin.components.bookings', compact(['bookings']));
    }

}
