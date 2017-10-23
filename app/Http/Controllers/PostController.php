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
        $post = Post::findOrFail($id);
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

        $post = Post::create($request->except('csrf'));
        //return $post->toJson();
        return redirect(url('blog'));
    }

    public function create()
    {
        return view('dashboard.post.create');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return 1;
    }

    public function blog()
    {
        $posts = Post::all();
        //return view('blog.index')->with(['posts' => $posts]);
        return view('blog.index', compact('posts'));
    }
}
