<?php 
namespace Xadmin\Repositories;

use Illuminate\Http\Request;
use App\Http\Requests;
use Xadmin\Models\FileMedia;
use File;
class FileMediaRepo {

	public function __construct(){

	}

	// Create and Save File
	public function create( $request ){
		$file = FileMedia::upload($request->file('file'));

		$fileMedia = FileMedia::create([
			'filename' => $file->name,
			'mime_type' => $file->getClientMimeType(),
			'size' => $file->getClientSize()
		]);

		return $fileMedia;
	}

	public function delete( $id ){
		$fileMedia = FileMedia::findOrFail($id);
		$fileMedia->delete();

		return File::delete( config('admin.fileUploadDirectory').$fileMedia->filename );
	}
}