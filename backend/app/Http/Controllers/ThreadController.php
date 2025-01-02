<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ThreadController extends Controller
{
    protected function formValidator(Request $request)
    {
        $pictures_rules = [];
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ];

        //check the pictures array:
        if (count($request->pictures) > 0) {
            //add the following rules:
            $pictures_rules = [
                'pictures.*.type' => ['required', 'string', Rule::in([
                    'image/jpeg',
                    "image/jpg",
                    "image/png",
                    "image/webp"
                ])],
                'pictures.*.fileString' => ['required', 'string']
            ];

            $rules = array_merge($pictures_rules, $rules);
        }

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
        return response()->json($request);
    }
}
