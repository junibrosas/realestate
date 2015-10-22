<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $table = "postmeta";
    protected $fillable = ['post_id', 'meta_key', 'meta_value'];

    public static function saveBundle( $postId, array $bundle ){
    	// Remove all previous post meta
    	PostMeta::where('post_id', $postId)->delete();

    	// Insert new post meta
    	foreach($bundle as $bundleKey => $bundleValue){
			// encode to json if meta value is an array
    		if(is_array($bundleValue)) $bundleValue = json_encode($bundleValue);

    		PostMeta::create([
				'post_id' => $postId,
				'meta_key' => $bundleKey,
				'meta_value' => $bundleValue
			]);
    	}
    }

    public static function updateBundle( $postId, array $bundle ){
    	$postmeta = PostMeta::where('post_id', $postId)->where('meta_key', $bundleKey)->first();
		if($postmeta){
			$postmeta->meta_value = $bundleValue;
			$postmeta->save();
		}
    }
}
