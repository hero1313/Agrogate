<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $brands = Brand::orderBy('created_at', 'desc')->get();

        // return view('admin.components.brands', compact(['brands']));
        return view('website.components.main');
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
