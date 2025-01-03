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
        $file_url = (storage_path('app/' . Picture::find($id)->file_url));
        return response()->file($file_url);
    }
}
