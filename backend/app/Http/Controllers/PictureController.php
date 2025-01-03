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
        $manager = new ImageManager(new Driver());
        $file_url = Picture::find($id)->file_url;
        return $manager->read($file_url);
    }
}
