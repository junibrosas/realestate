<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use Xadmin\Features\CMS\Models\Post;
use Xadmin\Features\CMS\Models\PostTag;
use Xadmin\Features\CMS\Models\Tag;

class PostTag extends Model
{
    protected $table = "post_tags";
    protected $fillable = ["post_id", "tag_id"];

    public function tag(){
    	return $this->hasOne('\Xadmin\Features\CMS\Models\Tag', 'id', 'tag_id');
    }

    public static function postTags(Post $post){
    	$collection = array();
    	$postTags = PostTag::where('post_id', $post->id)->get();
    	
    	if($postTags->count() <= 0) return;

    	foreach($postTags as $tag){
    		$collection[$tag->tag->slug] = $tag->tag->name;
    	}
        return $collection;
    }

    public static function saveTags($tags, Post $post){
    	// Remove all previous post and tag relationships
    	$postTags = PostTag::where('post_id', $post->id)->delete();
    	
    	$tagGroup = explode(',', $tags);
	    if($tags){
	        foreach ($tagGroup as $key => $tagName) {
	        	$tag = Tag::where('name', $tagName)->first();

	        	// Refrain from insertion if the tag already exists.
	        	if( !$tag ){
	        		$tag = Tag::create([
		                'name' => $tagName,
		                'slug' => str_slug($tagName)
		            ]);
	        	}

        		

	        	// Create new post and tag relationships
	            PostTag::create([
	                'post_id' => $post->id,
	                'tag_id' => $tag->id
	            ]);
	        }
	    }   
    }
}
