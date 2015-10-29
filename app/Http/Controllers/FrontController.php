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
        $categories = \Xadmin\Models\Tag::whereIn('id', [1,2,3,4,5])->with('posts')->get();
        return view('index', compact('properties', 'categories'));
    }

    public function properties(){
        $properties = Post::getPosts()->paginate( config('front.postPerPage') );
        return view('properties', compact('properties'));
    }
}
