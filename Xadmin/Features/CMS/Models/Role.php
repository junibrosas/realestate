<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use Xadmin\Features\CMS\Models\Permission;

class Role extends Model
{
	protected $table = "roles";

	public function permissions(){
		return $this->belongsToMany(Permission::class);
	}

	public function givePermissionTo(Permission $permission){
		return $this->permissions()->save($permission);
	}
}
