<?php 
namespace Xadmin\Repositories;

use Illuminate\Http\Request;
use Xadmin\Models\Post;
use Xadmin\Models\PostTag;
use Xadmin\Models\PostMeta;
use Xadmin\Models\FileMedia;

class PostRepo {
	public function __construct(){

	}

	// Create posts.
	public function create($request){
		// Save new post
		$post = Post::savePost( $request );

		// Save new tags
		PostTag::saveTags( $request->get('tags'), $post, 'tag' );

		// Save new category
		PostTag::saveBundle( $request->get('category'), $post, 'category' );

		// Save new post meta
		PostMeta::saveBundle( $post->id, $request->get('meta') );

		return $post;
	}

	// Update posts
	public function update( $request, $id ){
		// Find post
		$post = Post::where('post_type', 'post')->where('id',$id)->first();

		// Save new post
		$post = Post::savePost( $request, $post );

		if($request->get('remove_feature_image')){
			$post->feature_image = '';
			$post->save();
		}

		// Save new tags
		PostTag::saveTags( $request->get('tags'), $post, 'tag' );
		
		// Save new category
		PostTag::saveBundle( $request->get('category'), $post, 'category' );

		// Save new post meta
		PostMeta::saveBundle( $post->id, $request->get('meta') );

		return $post;
	}

	public function destroy( $id ){

		// remove specific post
		$post = Post::where('post_type', 'post')->where('id',$id)->first();

		// remove all post meta
		PostMeta::where('post_id', $post->id)->delete();

		// remove all post tags
		PostTag::where('post_id', $post->id)->delete();

		if ($post && $post->delete()) {
			return true;
		}

		return false;
	}

	// Uploads new image and save the reference to post.
	public function addImage( $postId, $fileMediaId ){
		$file = FileMedia::find( $fileMediaId );
		$post = Post::find( $postId );
		$post->feature_image = $file->filename;
		$post->save();

		return $post;
	}
}