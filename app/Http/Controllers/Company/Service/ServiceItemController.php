<?php

namespace App\Http\Controllers\Company\Service;

use App\Http\Controllers\Controller;
use App\Mail\NewHotelMail;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\ServiceItemImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceItem::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $image = Image::all();
        return view('company.components.services', compact(['services','image']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admins = User::where('role', 2)->get();
        $service = new ServiceItem($request->all());
        $service->user_id = Auth::id();
        $service->save();
        $images = $request->file('image');
        if ($request->hasFile('image')) {
            foreach($images as $img){
                $image = new ServiceItemImage();
                $image->service_item_id = $service->id;
                $file = $img; 
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

                $image->image = '/image/' . $filename;
                $image->save();
            }
        }
        $data = (object)[
            'text' => 'ვებსაიტზე დაემატა ახალი სერვისი',
        ];
        foreach($admins as $admin){
            Mail::to($admin->email)->send(new NewHotelMail((object) $data));
        }

        return redirect()->route('company.service.item.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $service = ServiceItem::find($id);
        $images = ServiceItemImage::where('service_item_id', $id)->orderBy('created_at', 'desc')->get();

        return view('company.components.service', compact(['service', 'images']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = ServiceItem::find($id);
        $service->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $images = ServiceItemImage::where('service_item_id', $id)->orderBy('created_at', 'desc')->get();
        $service = ServiceItem::find($id);
        $service->delete();
        foreach($images as $image){
            $image->delete();
        }
        return redirect()->route('company.service.item.index');
    }
}
