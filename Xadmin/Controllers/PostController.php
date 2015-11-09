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
use Xadmin\Repositories\PostRepo;

class PostController extends Controller
{

	protected $postRepo;

	public function __construct( PostRepo $postRepo ){
		$this->postRepo = $postRepo;
	}

	public function index()
	{
		$posts = Post::where('post_type', 'post')->paginate(10);
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
		$post = $this->postRepo->create( $request );

		//instaFlash('Successfully Published!', 'Yes! your post is published!');

		return redirect()->route('admin.posts.edit', $post->id)->withInput();
	}


	public function show($id)
	{
		//
	}

  
	public function edit($id)
	{
		$post = Post::where('post_type', 'post')->where('id',$id)->first();

		if(!isset($post->id))
			$post = new Post();

		return view('cms::post.post', compact('post'));
	}

 
	public function update(Request $request, $id)
	{
		// Update a post
		$post = $this->postRepo->update( $request, $id );

		return redirect()->back()->withInput();
	}
   
	public function destroy($id)
	{
		$isDestroyed = $this->postRepo->destroy( $id );
		
		if($isDestroyed) return redirect()->back()->with('message', 'Deleted Successfully.' );

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
		
		$post = $this->postRepo->addImage( $request->get('post'), $request->get('file') );

		return redirect()->route('admin.posts.edit', $post->id);
	}

}
