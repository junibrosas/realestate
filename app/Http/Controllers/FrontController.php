<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;

class FrontController extends Controller
{
    public function index($slug = ''){

        if($slug)
            return $this->dispatch(new \App\Jobs\Post($slug));

    	$properties = Post::getPosts()->take(8)->get();
        return view('index', compact('properties'));
    }

    public function properties(){
        return view('properties');
    }

    public function property(){
        return view('property');
    }
}
