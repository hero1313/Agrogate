<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $hotelFirst = Hotel::where('priority', '1')->orderBy('id', 'desc')->take(4)->get();
    $hotelSeccond = Hotel::where('priority', '2')->orderBy('id', 'desc')->take(4)->get();
    $hotelThird = Hotel::where('priority', '3')->orderBy('id', 'desc')->take(4)->get();
    $hotelFourth = Hotel::where('priority', '4')->orderBy('id', 'desc')->take(4)->get();
    $blogs = Blog::all();
    $image = Image::all();

    return view('website.components.main', compact('hotelFirst', 'hotelSeccond', 'hotelThird', 'hotelFourth', 'blogs', 'image'));
}

    public function about()
    {
        return view('website.components.about');
    }

    public function hotels()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->get();

        return view('website.components.hotels', compact(['hotels']));
    }

    public function showHotel($id)
    {
        $hotel = Hotel::find($id);

        return view('website.components.hotel', compact(['hotel']));
    }

    public function storeCompany()
    {
        return view('website.components.add');
    }

    public function blog()
    {
        $blog = Blog::orderBy('created_at', 'desc')->get();

        return view('website.components.blog', compact(['blog']));
    }

    public function faq()
    {
        return view('website.components.faq');
    }

    public function contact()
    {
        return view('website.components.contact');
    }
    public function storeContact()
    {
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->save();
        return back();
    }

}
