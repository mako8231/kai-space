<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show($profile_id)
    {
        $foundProfile = Profile::find($profile_id);

        return response()->json(["profile" => $foundProfile]);
    }
}
