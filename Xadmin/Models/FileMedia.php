<?php
namespace Xadmin\Models;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class FileMedia extends Model
{
    protected $table = 'filemedia';
    
    protected $fillable = ['filename', 'mime_type', 'size'];

    protected $directory = 'files/media';

    public function path(){
        return asset( config('admin.fileUploadDirectory') . $this->filename);
    }

    public function name(){
        $name = explode('.', $this->filename);
        if(isset($name[0])) return $name[0];
    }

    public static function upload(UploadedFile $file)
    {
		$fileMedia = new static;

		$file->name = time().'_'. strtolower( $file->getClientOriginalName() );

		$file->move(config('admin.fileUploadDirectory'), $file->name);

		return $file;

    }
}
