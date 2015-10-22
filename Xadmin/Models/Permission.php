<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;
use Xadmin\Models\Role;

class Permission extends Model
{
    protected $table = "permissions";

    public function roles(){
		return $this->belongsToMany(Role::class);
	}
}
