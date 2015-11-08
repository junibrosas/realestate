<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;
use Xadmin\Models\PostMeta;

class SearchController extends Controller
{
    public function __construct(){

    }

    public function searchTitle(Request $request){
    	$keyword = $request->get('q');

    	$pageTitle = 'Search Result: <b>' . $keyword . '</b>'; 
    	
    	$properties = Post::getPosts()->where("title", "LIKE", "%$keyword%")->paginate( config('front.postPerPage') );

        return view('properties', compact('properties', 'pageTitle'));
    }

    public function searchAdvance(Request $request){
        $country = $request->get('country');
        $location = $request->get('location');
        $type = $request->get('type');
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');

        $properties = Post::join('postmeta', function($join) use ( $country, $location )
            {
                $join->on('posts.id', '=', 'postmeta.post_id')
                    ->where('postmeta.meta_value', '=', $country);
            })
            ->select('posts.*', 'postmeta.meta_key', 'postmeta.meta_value')
            ->paginate( config('front.postPerPage') );


        //TODO: some more work to do especially for type, minimum price and maximum price.
        $pageTitle = 'Advance Search Result';
        
        return view('properties', compact('properties', 'pageTitle'));
    }
}
