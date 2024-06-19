<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\ServiceItemImage;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
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
        $children = 0;        
        // filter
        if ($request->city) {
            $hotels->where('city_ge', $request->city);
        }
        if ($request->date) {
            $dateRange = $request->date;
            list($startDate, $endDate) = explode(' - ', $dateRange);
            $startDateObj = DateTime::createFromFormat('m/d/Y', $startDate);
            $endDateObj = DateTime::createFromFormat('m/d/Y', $endDate);
            $interval = new DateInterval('P1D');
            $datePeriod = new DatePeriod($startDateObj, $interval, $endDateObj);

            $startDate = Carbon::parse($startDateObj);
            $endDate = Carbon::parse($endDateObj);
            $dateRange = [];

            for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
                $dateRange[] = $date->format('Y-m-d');
            }
        }
        if ($request->adult) {
            $adults = $request->adult;
        }
        if ($request->kid) {
            $children = $request->kid;
        }
        if ($request->conditioner) {
            $hotels->where('conditioner', $request->conditioner);
        }
        if ($request->Protection) {
            $hotels->where('Protection', $request->Protection);
        }
        if ($request->porch) {
            $hotels->where('porch', $request->porch);
        }
        if ($request->internet) {
            $hotels->where('internet', $request->internet);
        }
        if ($request->kitchen) {
            $hotels->where('kitchen', $request->kitchen);
        }
        if ($request->pool) {
            $hotels->where('pool', $request->pool);
        }
        if ($request->sauna) {
            $hotels->where('sauna', $request->sauna);
        }
        if ($request->price) {
            $priceRange = explode(';', $request['price']);
            $minPrice = $priceRange[0];
            $maxPrice = $priceRange[1];
            $hotels->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);
        }

        // შემოწმება არის თუ არა ადგილი შესაბამის ნომრებზე
        if (isset($dateRange) && isset($adults) && isset($children)) {
            $hotels->whereHas('rooms', function ($query) use ($dateRange, $adults, $children) {
                $query->where('seats', '>=', $adults)
                    ->where('child_seats', '>=', $children)
                    ->whereDoesntHave('bookings', function ($bookingQuery) use ($dateRange) {
                        $bookingQuery->whereIn('date', $dateRange)
                                     ->groupBy('room_id', 'date')
                                     ->havingRaw('COUNT(*) >= rooms.quantity');
                    });
            });
        }

        $hotels = $hotels->orderBy('created_at', 'desc')->simplePaginate(20);
        $request = $request->all();

        return view('website.components.hotels', compact(['hotels', 'image', 'request']));
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
        $blogs = Blog::simplePaginate(20);

        return view('website.components.blogs', compact(['blogs']));
    }

    public function showBlog($id)
    {
        $blog = Blog::find($id);

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

    public function services(Request $request)
    {
        $image = ServiceItemImage::all();
        $services = ServiceItem::where('permission', 1);
        // filter
        if ($request->city) {
            $services->where('city_ge', $request->city);
        }

    
        if ($request->price) {
            $priceRange = explode(';', $request['price']);
            $minPrice = $priceRange[0];
            $maxPrice = $priceRange[1];
            $services->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);
        }

        $services = $services->orderBy('created_at', 'desc')->simplePaginate(20);
        $request = $request->all();

        return view('website.components.services', compact(['services', 'image', 'request']));
    }

    public function showService($id)
    {
        $service = ServiceItem::find($id);
        $company = User::find($service->user_id);

        $images = ServiceItemImage::where('service_item_id', $id)->get();
        return view('website.components.service', compact(['service', 'company','images']));
    }
}
