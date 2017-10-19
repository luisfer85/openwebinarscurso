<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{
    public function __construct()
    {
        //
    }

    public function show($id)
    {
    	return "Showing post " . $id;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('post/create')
            ->withErrors($validator)
            ->withInput();
        }

        //Store post
    }
}
