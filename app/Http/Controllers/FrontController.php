<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;
use Xadmin\Models\Tag;
use App\Jobs\PostJob;

class FrontController extends Controller
{
	public function __construct(){

	}

	public function index($slug = ''){
		if($slug)
			return $this->dispatch(new PostJob($slug));

		$properties = Post::getPosts()->take(8)->get();
		$categories = Tag::take(3)->where('parent_id','!=', 0)->with('posts')->get();

		return view('index', compact('properties', 'categories'));
	}

	public function properties(){
		$properties = Post::getPosts()->paginate( config('front.postPerPage') );
		
		$properties->setPath('properties');

		return view('properties', compact('properties'));
	}

	public function category(Request $request){
		$lastSegment = preg_split("/\//", $request->url());
		$categorySlug = array_pop( $lastSegment ); // get the last segment on the current url
		$category = Tag::where('slug', $categorySlug)->first();


		// check if there is no category found.
		if(!$category) return redirect()->route('front.error-404');

		// condition where clause for parent categories or child.
		if($category->parent_id == 0){
			$field = 'tags.parent_id'; $value = $category->id;
		}else{
			$field = 'tags.slug'; $value = $category->slug;
		}

		// Get posts by PostTag slug or parent_id field
		$properties = Post::join('post_tags', 'posts.id', '=', 'post_tags.post_id')
			->join('tags', 'post_tags.tag_id', '=', 'tags.id')
			->where( $field, $value )
			->select('posts.*', 'tags.name as tagName')
			->paginate( config('front.postPerPage') );

		$pageTitle = 'Category: '. $category->name;


		if($category->parent_id == 0){
			$breadcrumbData = [
				['url' => url(), 'name' => 'Home'],
				['url' => route('front.category').'/'.$category->slug, 'name'=> $category->name]
			];
		}else{
			$breadcrumbData = [
				['url' => url(), 'name' => 'Home'],
				['url' => route('front.category', $category->parent()->slug), 'name' =>  $category->parent()->name],
				['url' => route('front.category').'/'.$category->parent()->slug.'/'.$category->slug, 'name'=> $category->name]
			];
		}


		return view('properties', compact('properties', 'pageTitle', 'breadcrumbData'));
	}
}
