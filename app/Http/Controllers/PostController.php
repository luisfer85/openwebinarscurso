<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
