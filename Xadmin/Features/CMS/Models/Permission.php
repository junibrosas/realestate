<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use Xadmin\Features\CMS\Models\Role;

class Permission extends Model
{
    protected $table = "permissions";

    public function roles(){
		return $this->belongsToMany(Role::class);
	}
}
