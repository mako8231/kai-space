<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return response()->json(['user' => $request->user(), 'profile' => $request->user()->profile]);
    }
}
