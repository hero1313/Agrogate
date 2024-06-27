<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceItemImage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('company.components.profile');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $user = Auth::user();
    if ($request->hasFile('image')) {
        $file = $request->file('image'); // Get the uploaded file

        // Ensure $file is an instance of UploadedFile
        if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
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

            $user->image = '/image/' . $filename;
        }
    }
    $user->update($request->all());
    return back();
}


}
