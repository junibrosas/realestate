<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
	protected $fillable = ['user_id', 'firstname', 'lastname', 'picture']; 
}
