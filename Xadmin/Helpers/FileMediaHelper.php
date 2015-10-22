<?php
use Xadmin\Models\FileMedia;

// Return the preview of filemedia in a post
if(! function_exists('_fileMediaPreview'))
{
	function _fileMediaPreview(FileMedia $file)
	{
		if(in_array($file->mime_type, ['image/jpeg', 'image/png', 'image/gif', 'image/jpg']))
		{
			return '<img class="filemedia-preview" width="60" alt="'.$file->name().'" src="'.$file->path().'" />';
		}else
		{
			return '';
		}
	}
}