<?php

namespace Xadmin\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Xadmin\Models\FileMedia;
use File;

class FileController extends Controller
{
    public function index()
    {
        $files = FileMedia::orderBy('created_at', 'DESC')->get();
        $selectType = 'multiple';
        return view('cms::file.files', compact('files', 'selectType'));
    }

    public function store(Request $request)
    {
        $file = FileMedia::upload($request->file('file'));

        FileMedia::create([
            'filename' => $file->name,
            'mime_type' => $file->getClientMimeType(),
            'size' => $file->getClientSize()
        ]);

        return $file;
    }

    public function destroy($id)
    {
        $fileMedia = FileMedia::findOrFail($id);
        $fileMedia->delete();

        File::delete( config('admin.fileUploadDirectory').$fileMedia->filename );

        return redirect()->back();
    }
}
