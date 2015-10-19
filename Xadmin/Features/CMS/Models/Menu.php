<?php
namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = "menus";
	protected $fillable = ["url", "name", "attribute", "parent_id", "order"];

	// Return all parent menus
	public static function parents(){
		return Menu::where('parent_id', 0)->get();
	}

	// Collect all children menus
	public function subMenus(){
		return Menu::where('parent_id', $this->id)->orderBy('order', 'ASC')->get();
	}

	public function hasChildren(){
		$totalChildren = Menu::where('parent_id', $this->id)->orderBy('order', 'ASC')->get()->count();
		if($totalChildren > 0){
			return true;
		}
		return false;
	}
}
