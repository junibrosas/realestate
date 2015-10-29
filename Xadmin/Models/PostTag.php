<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;
use Xadmin\Models\Post;
use Xadmin\Models\PostTag;
use Xadmin\Models\Tag;

class PostTag extends Model
{
    protected $table = "post_tags";
    protected $fillable = ["post_id", "tag_id", "type"];

    public function tag(){
    	return $this->hasOne(\Xadmin\Models\Tag::class, 'id', 'tag_id');
    }


    public static function postTags(Post $post){
    	$collection = array();
    	$postTags = PostTag::where('post_id', $post->id)->where('type', 'tag')->get();
    	
    	if($postTags->count() <= 0) return;

    	foreach($postTags as $tag){
    		$collection[$tag->tag->slug] = $tag->tag->name;
    	}
        return $collection;
    }



    // this format will save the tags.
    // "category" => array:3 [
    //    0 => "13"
    //    1 => "22"
    //    2 => "37"
    //  ]
    public static function saveBundle( $categoryList, $post, $type ){
        // Remove all previous post and tag relationships
        PostTag::where('post_id', $post->id)->where('type', $type)->delete();

        if(count($categoryList) > 0){
            foreach($categoryList as $catId){
                $postTag = new PostTag();
                $postTag->post_id = $post->id;
                $postTag->tag_id = $catId;
                
                $postTag->type = 'category';
                $postTag->save();

            }
        }

    }

    // this format will save the tags.
    // tags => 'tag1, tag2, tag3, tag4'
    public static function saveTags($tags, Post $post, $type){
    	// Remove all previous post and tag relationships
    	$postTags = PostTag::where('post_id', $post->id)->where('type', $type)->delete();
    	
    	$tagGroup = explode(',', $tags);
	    if($tags){
	        foreach ($tagGroup as $key => $tagName) {
	        	$tag = Tag::where('name', $tagName)->first();

	        	// Refrain from insertion if the tag already exists.
	        	if( !$tag ){
	        		$tag = Tag::create([
		                'name' => $tagName,
		                'slug' => str_slug($tagName),
                        'type' => $type
		            ]);
	        	}

	        	// Create new post and tag relationships
	            PostTag::create([
	                'post_id' => $post->id,
	                'tag_id' => $tag->id,
                    'type' => $type
	            ]);
	        }
	    }   
    }
}
