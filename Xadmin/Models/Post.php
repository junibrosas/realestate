<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['user_id', 'title', 'content', 'feature_image', 'is_visible', 'published_at', 'slug', 'post_type', 'meta_keywords', 'meta_description'];


    // Display posts with type 'post'
    public static function getPosts(){
        return Post::where('post_type', 'post')->where('is_visible', 1);
    }

    // Display posts with type 'pages'
    public static function getPages(){
        return Post::where('post_type', 'page')->where('is_visible', 1);
    }

    public function featureImage(){
        if($this->feature_image) return asset( config('admin.fileUploadDirectory') . $this->feature_image);
    }

    public static function savePost( Request $request, Post $post = null ){
        if(!$post){
            $post = new Post();
        }
        $isVisible = $request->get('is_visible');

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = str_slug( $request->get('title') );
        $post->meta_keywords = $request->get('title');
        $post->meta_description = $request->get('content');
        $post->is_visible = isset($isVisible);
        if($request->get('published_at')) 
            $post->published_at =  $request->get('published_at') . ' ' . date("H:i:s", time());
        
        $post->save();

        return $post;
    }
}

