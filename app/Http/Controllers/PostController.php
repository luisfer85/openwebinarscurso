<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $posts = Post::all();
        return $posts->toJson();
    }

    public function show($id)
    {
        $post = Post::find($id);
        return $post->toJson();
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
