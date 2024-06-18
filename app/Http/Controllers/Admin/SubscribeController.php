<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\ServiceItemImage;
use App\Models\Subscribe;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribes = Subscribe::all();

        return view('admin.components.subscribes', compact('subscribes'));
    }

    public function store(Request $request)
    {
        $subscribe = new Subscribe;
        $subscribe->name = $request->name;
        $subscribe->email = $request->email;
        $subscribe->subject = $request->subject;
        $subscribe->text = $request->text;
        $subscribe->save();

        return back();
    }


}
