<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Thread;
use Illuminate\Support\Str;

//import models
use App\Models\Gallery;
use App\Models\Picture;


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
        if (sizeof($request->pictures) > 0) {
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
        $mime_list = [
            "image/jpeg" => 'jpg',
            "image/jpg" => 'jpg',
            "image/png" => 'png',
            "image/webp" => 'webp'
        ];

        //Validate the form
        $errors = $this->formValidator($request);


        //Check the size of the errors
        if (sizeof($errors) > 0) {
            return response()->json($errors)->setStatusCode(422);
        }

        //create the thread post

        //check for existing pictures:

        if (sizeof($request->pictures) > 0) {
            //decode the base64 string
            foreach ($request->pictures as $picture) {
                Str::random(10);
            }
        }

        //Thread::create(['body' => 'blablabla', 'title' => 'aaa', 'category' => 'hello', 'rating' => 0, 'author' => 0, 'art_post_id' => NULL])

        $thread = Thread::create([]);

        return response()->json();
    }
}
