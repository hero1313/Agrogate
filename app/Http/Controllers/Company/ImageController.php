<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use File;

class ImageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $images = $request->file('image');
        if ($request->hasFile('image')) {
            foreach($images as $img){
                $image = new Image();
                $image->hotel_id = $id;
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
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     */
    public function destroy(Request $request, Image $image)
    {
        $images = $request->image;
        if ($images) {
            foreach($images as $id){
                $image = Image::find($id);
                $destination = $image->image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $image->delete();
            }
        }
        return redirect()->back();
    }

}
