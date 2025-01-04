<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        if ($gallery) {
            $gallery->pictures;
            return response()->json(['gallery' => $gallery]);
        }

        return abort(404);
    }
}
