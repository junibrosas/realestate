<?php
use Xadmin\Models\Post;
use Xadmin\Models\PostTag;
use Xadmin\Models\PostMeta;

$GLOBALS['statuses'] = array( 0 => 'hidden', 1 => 'published' );

// Return post url to preview post
if ( ! function_exists('_postPermaLink'))
{
    function _postPermaLink( Post $post )
    {
        //$post = Post::find($post->id);
        return url('/'.$post->slug);
    }
}

// Return the post url to edit post
if ( ! function_exists('_postEditLink'))
{

    function _postEditLink( Post $post)
    {
        if ($post->post_type == 'post') $seg = 'posts';
        if ($post->post_type == 'page') $seg = 'pages';

        //$post = Post::find($post->id);
        return route('admin.'.$seg.'.edit', $post->id);
    }
}

// Return the post title
if ( ! function_exists('_postTitle'))
{
    function _postTitle( Post $post )
    {
        //$post = Post::find($post->id);
        return $post->title;
    }
}

// Return set of post tags separated by comma
if ( ! function_exists('_postStickTags'))
{
    function _postStickTags( Post $post )
    {
        $postTags = PostTag::postTags( $post );

        if(count($postTags) <= 0) return;

        return implode(',', $postTags);
    }
}

// Return statuses for the posts.
if ( ! function_exists('_postStatuses'))
{
    function _postStatuses()
    {
        return $GLOBALS['statuses'];
    }
}

// Return the post feature image
if ( ! function_exists('_postFeatureImage'))
{
    function _postFeatureImage( Post $post )
    {
        if($post->featureImage())   
            return '<img src="'.$post->featureImage().'" alt="'._postTitle($post).'" class="post-feature-image img-responsive">';

        return false;
    }
}

// Return the post feature image
if ( ! function_exists('_postFeatureImageSource'))
{
    function _postFeaturEImageSource( Post $post )
    {
        if($post->featureImage())   
            return $post->featureImage();

        return false;
    }
}

// Return a status by specific status id
if ( ! function_exists('_postStatus'))
{
    function _postStatus($status_id)
    {
		return $GLOBALS['statuses'][ $status_id ];
    }
}

// Return post meta by specifying meta key
if ( ! function_exists('_postMeta'))
{
    function _postMeta( $postId, $key )
    {

        if(!$postId) return;

        // if the key has a json decoded string, 
        // iterate each item and match it to the value.
        if(is_array($key)){
            $meta = PostMeta::where('post_id', $postId)->where('meta_key', $key['meta_key'])->first();
            $metaValueJsonDecode = json_decode($meta->meta_value);
            if(count($metaValueJsonDecode) > 0){
                foreach($metaValueJsonDecode as $itemKey => $itemValue){

                    if($key['meta_value'] == $itemKey){
                        return $itemValue;
                    } 
                }
            }
        }

        $meta = PostMeta::where('post_id', $postId)->where('meta_key', $key)->first();

        if(!$meta) return;

        return $meta->meta_value;
    }
}

// Return post description content
if ( ! function_exists('_postContent')){
    function _postContent( $post ){
        return $post->content;
    }
}

// Return post excerpt, limited content
if ( ! function_exists('_postExcerpt')){
    function _postExcerpt( $post, $limit = 0 ){
        return substr($post->content, 0, $limit);
    }
}

