<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UpdateNewHotelMail;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\ServiceItemBooking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Booking::query();

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

        // Get the results
        $bookings = $query->orderBy('created_at', 'desc')->simplePaginate(20);

        return view('admin.components.dashboard', compact(['bookings']));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCompany()
    {
        $companies = User::with('company')->orderBy('created_at', 'desc')->simplePaginate(20);

        return view('admin.components.companies', compact(['companies']));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexHotel()
    {
        $hotels = Hotel::with('company')->orderBy('created_at', 'desc')->simplePaginate(20);

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
        if ($request->permission == 0) {
            $rooms = Room::where('hotel_id', $hotel->id)->get();
            $services = Service::where('hotel_id', $hotel->id)->get();
            $images = Image::where('hotel_id', $hotel->id)->get();
            $rooms->each(function ($room) {
                $room->delete();
            });
            $services->each(function ($service) {
                $service->delete();
            });
            $images->each(function ($image) {
                $image->delete();
            });
            $hotel->delete();
            $text = 'თქვენი სასტუმროს ვერიფიკაცია წარუმატებლად დასრულდა';
        } elseif ($request->permission == 1) {
            $hotel->permission = $request->permission;
            $text = 'თქვენი სასტუმროს ვერიფიკაცია წარმატებით დასრულდა';
            $hotel->save();
        }
        if ($request->text) {
            $text = $request->text;
        }
        $data = (object)[
            'text' => $text,
        ];
        Mail::to($company->email)->send(new UpdateNewHotelMail((object) $data));


        return back();
    }



    /**
     * Display a listing of the resource.
     */
    public function indexBooking(Request $request)
    {
        $query = Booking::with('company', 'hotel');
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

        if ($start_date) {
            $query->whereDate('date', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('date', '<=', $end_date);
        }

        // Get the results
        $bookings = $query->orderBy('created_at', 'desc')->simplePaginate(20);
        return view('admin.components.bookings', compact(['bookings']));
    }
    public function dashboard()
    {
        if (Auth::user()->role == 2) {
            return redirect('/company/hotels');
        } else if (Auth::user()->role == 1) {
            return redirect('/company/hotels');
        } else {
            return abort(403, 'წვდომა შეზღუდულია');
        }
    }

    public function indexBlog(Request $request)
    {
        $blogs = Blog::orderBy('created_at', 'desc')->simplePaginate(20);

        return view('admin.components.blogs', compact(['blogs']));
    }

    public function storeBlog(Request $request)
    {
        $blog = new Blog();
        $blog->name_ge = $request->name_ge;
        $blog->name_en = $request->name_en;
        $blog->text_ge = $request->text_ge;
        $blog->text_en = $request->text_en;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('admin/assets/image/', $filename);

            list($width, $height) = getimagesize('admin/assets/image/' . $filename);
            $newWidth = 850;
            $newHeight = ($height / $width) * $newWidth;
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($newImage, imagecreatefromstring(file_get_contents('admin/assets/image/' . $filename)), 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $saveFunction = 'image' . (pathinfo('admin/assets/image/' . $filename, PATHINFO_EXTENSION) == 'jpg' ? 'jpeg' : pathinfo('admin/assets/image/' . $filename, PATHINFO_EXTENSION));
            $saveFunction($newImage, 'admin/assets/image/' . $filename);

            imagedestroy($newImage);

            $blog->image = '/admin/assets/image/' . $filename;
        }
        $blog->save();

        return back();
    }


    public function updateBlog(Request $request,  $id)
    {

        $blog = Blog::find($id);
        $blog->name_ge = $request->name_ge;
        $blog->name_en = $request->name_en;
        $blog->text_ge = $request->text_ge;
        $blog->text_en = $request->text_en;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('admin/assets/image/', $filename);

            list($width, $height) = getimagesize('admin/assets/image/' . $filename);
            $newWidth = 850;
            $newHeight = ($height / $width) * $newWidth;
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($newImage, imagecreatefromstring(file_get_contents('admin/assets/image/' . $filename)), 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $saveFunction = 'image' . (pathinfo('admin/assets/image/' . $filename, PATHINFO_EXTENSION) == 'jpg' ? 'jpeg' : pathinfo('admin/assets/image/' . $filename, PATHINFO_EXTENSION));
            $saveFunction($newImage, 'admin/assets/image/' . $filename);

            imagedestroy($newImage);

            $blog->image = '/admin/assets/image/' . $filename;
        }
        $blog->update();

        return back();
    }

    public function destroyBlog(Request $request,  $id)
    {

        $blog = Blog::find($id);
        $blog->delete();

        return back();
    }


    public function serviceIndex()
    {
        $services = ServiceItem::with('company')->orderBy('created_at', 'desc')->simplePaginate(20);
        return view('admin.components.services', compact(['services']));
    }

    public function serviceBooking(Request $request)
    {

        $query = ServiceItemBooking::with('service', 'company');

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

        if ($start_date) {
            $query->whereDate('date', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('date', '<=', $end_date);
        }

        // Get the results
        $bookings = $query->orderBy('created_at', 'desc')->simplePaginate(20);

        return view('admin.components.service-booking', compact(['bookings']));
    }
}
