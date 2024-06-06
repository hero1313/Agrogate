<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
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

    public function hotels(Request $request)
    {
        $image = Image::all();
        $hotels = Hotel::where('permission', 1);

        if($request->city){
            $hotels->where('city_ge', $request->city);
        }
        if($request->date){

        }
        if($request->adult){
            
        }
        if($request->kid){
            
        }
        if($request->conditioner){
            $hotels->where('conditioner', $request->conditioner);
        }
        if($request->Protection){
            $hotels->where('Protection', $request->Protection);
        }
        if($request->porch){
            $hotels->where('porch', $request->porch);
        }
        if($request->internet){
            $hotels->where('internet', $request->internet);
        }
        if($request->kitchen){
            $hotels->where('kitchen', $request->kitchen);
        }
        if($request->pool){
            $hotels->where('pool', $request->pool);
        }
        if($request->sauna){
            $hotels->where('sauna', $request->sauna);
        }
        if($request->price){
            $priceRange = explode(';', $request['price']);
            $minPrice = $priceRange[0];
            $maxPrice = $priceRange[1];
            $hotels->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);
        }

        
        $hotels = $hotels->orderBy('created_at', 'desc')->get();

        $request = $request->all();


        return view('website.components.hotels', compact(['hotels','image','request']));
    }

    public function showHotel($id)
    {
        $hotel = Hotel::find($id);
        $company = User::find($hotel->user_id);
        $rooms = Room::where('hotel_id', $id)->get();
        $services = Service::where('hotel_id', $id)->get();
        $images = Image::where('hotel_id', $id)->get();
        return view('website.components.hotel', compact(['hotel', 'company', 'rooms', 'services', 'images']));
    }

    public function storeCompany()
    {
        return view('website.components.add');
    }

    public function blog()
    {
        $blogs = Blog::all();

        return view('website.components.blog', compact(['blogs']));
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
