<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Tag extends Model
{
	protected $table = "tags";
	protected $fillable = ["name", "slug", "description", "type", "parent_id", "order", "count"];

	public function posts(){
		return $this->belongsToMany(\Xadmin\Models\Post::class, 'post_tags');
	}

	public function parent(){
		return Tag::where('id', $this->parent_id)->first();
	}

	public static function saveTag(Request $request)
	{
		$tag = new Tag();
		
		return self::_save( $tag, $request );
	}

	public static function updateTag( Request $request ){
		$tag = Tag::find( $request->get('tagId') );

		return self::_save( $tag, $request );
	}

	private static function _save(Tag $tag, Request $request){
		$tag->name = $request->get('name');
		$tag->slug = $request->get('slug') ? $request->get('slug') : str_slug( $request->get('name') );
		$tag->type = $request->get('type');
		$tag->description = $request->get('description');
		$tag->parent_id = $request->get('parent_id') ? $request->get('parent_id') : 0;
		$tag->count = $request->get('count') ? $request->get('count') : 0 ;
		$tag->save();

		return $tag;
	}
}
