<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Xadmin\Models\Post;

class PostJob extends Job implements SelfHandling
{
	protected $slug;
	
	public function __construct($slug)
	{
		$this->slug = $slug;
	}

	public function handle()
	{
		$post = Post::where('slug', $this->slug)->first();

		if(!$post) return redirect()->route('front.error-404');

		$postTagIds = array();
		if( count( $post->postTags ) > 0 ){
			foreach($post->postTags as $postTag){
				$postTagIds[] = $postTag->tag_id;		
			}
		} 

		// Retrieve related posts by specific tags
		$relatedPosts = Post::join('post_tags', 'posts.id', '=', 'post_tags.post_id')
			->join('tags', 'post_tags.tag_id', '=', 'tags.id')
			->whereIn( 'post_tags.tag_id', $postTagIds)
			->orderByRaw('RAND()')->take(10)
			->select('posts.*', 'tags.name as tagName')
			->take(3)
			->distinct() // this will only return distinct values
			->get();

		return view('property', compact('post', 'relatedPosts'));
	}
}
