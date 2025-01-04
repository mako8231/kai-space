<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;


class PictureController extends Controller
{
    public function index(Request $request, $id)
    {
        $picture = Picture::find($id);
        if ($picture) {
            $file_url = (storage_path('app/' . $picture->file_url));
            return response()->file($file_url);
        }

        return abort(404);
    }
}
