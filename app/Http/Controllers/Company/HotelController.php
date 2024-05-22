<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $image = Image::all();
        return view('company.components.hotels', compact(['hotels','image']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $hotel = new Hotel($request->all());
    $hotel->user_id = Auth::id();
    $hotel->save();
    $images = $request->file('image');
    if ($request->hasFile('image')) {
        foreach($images as $img){
            $image = new Image();
            $image->hotel_id = $hotel->id;
            $file = $img; // Using $img instead of $request->file('image')
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('image/', $filename);

            list($width, $height) = getimagesize('image/' . $filename);
            $newWidth = 850;
            $newHeight = ($height / $width) * $newWidth;
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($newImage, imagecreatefromstring(file_get_contents('image/' . $filename)), 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $saveFunction = 'image' . (pathinfo('image/' . $filename, PATHINFO_EXTENSION) == 'jpg' ? 'jpeg' : pathinfo('image/' . $filename, PATHINFO_EXTENSION));
            $saveFunction($newImage, 'image/' . $filename);

            imagedestroy($newImage);

            $image->image = 'image/' . $filename;
            $image->save();
        }
    }

    return redirect()->route('company.hotel.index');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $rooms = Room::orderBy('created_at', 'desc')->get();
        // $services = Service::orderBy('created_at', 'desc')->get();
        // $hotel = Hotel::find($id);
        return view('company.components.hotel');

        // return view('company.components.hotels', compact(['rooms','hotel','services']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
