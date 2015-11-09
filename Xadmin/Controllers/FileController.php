<?php

namespace Xadmin\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\FileMedia;
use Xadmin\Repositories\FileMediaRepo;
use File;

class FileController extends Controller
{
	protected $fileMediaRepo;

	public function __construct( FileMediaRepo $fileMediaRepo ){
		$this->fileMediaRepo = $fileMediaRepo;
	}

	public function index()
	{
		$files = FileMedia::orderBy('created_at', 'DESC')->get();
		$selectType = 'multiple';
		return view('cms::file.files', compact('files', 'selectType'));
	}

	public function store(Request $request)
	{
		return $this->fileMediaRepo->create( $request );
	}

	public function destroy($id)
	{
		$this->fileMediaRepo->delete( $id );

		return redirect()->back();
	}
}
