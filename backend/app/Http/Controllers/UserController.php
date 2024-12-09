<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) 
    {   
        return $request->user();
    }
}
