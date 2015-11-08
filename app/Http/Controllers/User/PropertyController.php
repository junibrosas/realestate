<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;

class PropertyController extends Controller
{
    public function __construct(){
    }

    public function index(){
		$properties = Post::getPosts()->take(6)->get();
    	return view('user.properties', compact('properties'));
    }

    public function create(){
    	return view('user.property-create');
    }
}
