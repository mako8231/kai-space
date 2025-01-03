<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function index(Request $request, $id)
    {
        return Storage::download(Picture::find($id)->file_url);
    }
}
