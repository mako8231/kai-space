<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    protected function formValidator(Request $request){
        $rules = [
            'username' => ['required', 'string', 'max:255', 'unique:App\Models\User,username'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:App\Models\User,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        $messages = [
            'required' => 'The :attribute field is required.',
            'unique' => 'This :attribute is being used.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->errors()) {
            return $validator->errors();
        }

        return [];
    }

    public function store(Request $request)
    {
        $errors = $this->formValidator($request);
        if (sizeof($errors) > 0) {
            return response()->json($errors)->setStatusCode(422);
        }


        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        /**event(new Registered($user));

        Auth::login($user);**/

        return response()->noContent();
        
    }
}
