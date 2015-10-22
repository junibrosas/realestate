<?php

namespace Xadmin\Controllers;

use Illuminate\Http\Request;
use App\Http\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;
use Xadmin\Models\PostTag;
use Xadmin\Models\FileMedia;
use Xadmin\Models\PostMeta;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::getPosts()->paginate(10);
        return view('cms::post.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create( Request $request )
    {
        $post = new Post();
        return view('cms::post.post', compact('post'));
    }

    
    public function store( Request $request )
    {
        // Save new post
        $post = Post::savePost( $request );
        
        $post->post_type = 'post';
        $post->save();

        // Save new tags
        PostTag::saveTags( $request->get('tags'), $post );

        // Save new post meta
        PostMeta::saveBundle( $post->id, $request->get('meta') );

        //instaFlash('Successfully Published!', 'Yes! your post is published!');

        return redirect()->route('admin.posts.edit', $post->id)->withInput();
    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $post = Post::getPosts()->where('id',$id)->first();
        if(!isset($post->id))
            $post = new Post();    

        return view('cms::post.post', compact('post'));
    }

 
    public function update(Request $request, $id)
    {
        // Find post
        $post = Post::getPosts()->where('id',$id)->first();

        // Save new post
        $post = Post::savePost( $request, $post );

        if($request->get('remove_feature_image')){
            $post->feature_image = '';
            $post->save();
        }

        // Save new tags
        PostTag::saveTags( $request->get('tags'), $post );

        // Save new post meta
        PostMeta::saveBundle( $post->id, $request->get('meta') );

        return redirect()->back()->withInput();
    }

   
    public function destroy($id)
    {
        $post = Post::getPosts()->where('id',$id)->first();

        if ($post && $post->delete()) {
            return redirect()->back()->with('message', 'Deleted Successfully.' );
        }

        return redirect()->back()->with('message', 'Unable to delete.' );
    }

    /**
     * Select files for a single post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postMedia(Request $request)
    {
        $postId = $request->get('post');
        if(!$postId) return redirect()->route('admin.root')->with('message', 'Seems like you have not selected a post.');

        $files = FileMedia::orderBy('created_at', 'DESC')->get();
        $selectType = 'single';
        return view('cms::post.post-files', compact('files', 'postId', 'selectType')); 
    }

    public function storePostMedia(Request $request){
        $file = FileMedia::find($request->get('file'));
        $post = Post::find($request->get('post'));
        $post->feature_image = $file->filename;
        $post->save();

        return redirect()->route('admin.posts.edit', $post->id);
    }

}
