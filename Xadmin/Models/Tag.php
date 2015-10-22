<?php

namespace Xadmin\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ["name", "slug", "description", "parent", "count"];
}
