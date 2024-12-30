<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;

class ThreadController extends Controller
{
    protected function formValidator(Request $request)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
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
    public function store(Request $request) {}
}
