<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Xadmin\Models\Post;
use Xadmin\Repositories\PostRepo;
use Xadmin\Repositories\FileMediaRepo;

class PropertyController extends Controller
{
	protected $postRepo;
	protected $fileMediaRepo;

	public function __construct( PostRepo $postRepo, FileMediaRepo $fileMediaRepo ){
		$this->postRepo = $postRepo;
		$this->fileMediaRepo = $fileMediaRepo;
	}

	public function index(){
		$properties = Post::userPosts()->get();

		return view('user.properties', compact('properties'));
	}

	public function create(){
		$post = new Post();

		return view('user.property-create', compact('post'));
	}

	public function store( Request $request )
	{
		// Save new post
		$post = $this->postRepo->create( $request );

		if( $request->file('file') ){
			// Upload the file media
			$fileMedia = $this->fileMediaRepo->create( $request );

			// Save the file reference to post
			$this->postRepo->addImage( $post->id, $fileMedia->id );
		}
		


		//instaFlash('Successfully Published!', 'Yes! your post is published!');

		return redirect()->route('front.user.properties.edit', $post->id)->withInput();
	}

	public function edit($id)
	{
		$post = Post::where('post_type', 'post')->where('id',$id)->first();

		if(!isset($post->id))
			$post = new Post();

		return view('user.property-create', compact('post'));
	}

	public function update(Request $request, $id)
	{
		// Update a post
		$post = $this->postRepo->update( $request, $id );

		if( $request->file('file') ){
			// Upload the file media
			$fileMedia = $this->fileMediaRepo->create( $request );

			// Save the file reference to post
			$this->postRepo->addImage( $post->id, $fileMedia->id );
		}
		

		return redirect()->back()->withInput();
	}

	public function destroy($id)
	{
		$isDestroyed = $this->postRepo->destroy( $id );
		
		if($isDestroyed) return redirect()->back()->with('message', 'Deleted Successfully.' );

		return redirect()->back()->with('message', 'Unable to delete.' );
	}
}
