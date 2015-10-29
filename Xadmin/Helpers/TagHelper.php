<?php
use \Illuminate\Support\Collection;
use \Xadmin\Models\Tag;
use \Xadmin\Models\PostTag;

if ( ! function_exists('_categoryList'))
{
     // Return set of category with key "id" and value "name".
    function _categoryList( $tags = array() )
    {
        if(!$tags) $tags = Tag::where('type','category')->get();

    	$tagList[0] = "Please select";
    	if ( count($tags) > 0) {
    		foreach ($tags as $tag) {

                if($tag->type == 'category'){
                    $tagList[ $tag->id ] = $tag->name;
                }
		 		
		 	}
    	}

	 	return $tagList;
    }
}

if ( ! function_exists('_tagList'))
{
     // Return set of tags with key "id" and value "name".
    function _tagList( $tags )
    {
        $tagList[0] = "Please select";
        if ( count($tags) > 0) {
            foreach ($tags as $tag) {
                if($tag->type == 'tag'){
                    $tagList[ $tag->id ] = $tag->name;
                }
                
            }
        }
        return $tagList;
    }
}

if ( ! function_exists('_tagExistInPost'))
{
     // Check if post has tag
    function _tagExistInPost( $postId, $tagId )
    {
        $postTag = PostTag::where('post_id', $postId)->where('tag_id', $tagId)->first();

        if($postTag) return true;

        return false;
    }
}