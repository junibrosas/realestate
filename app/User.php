<?php

namespace App;

use Xadmin\Features\CMS\Models\Role;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Xadmin\Features\CMS\Models\Profile;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function profile(){
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role){
        if(is_string($role)){
            return $this->roles()->contains('name', $role);
        }

        return !! $role->intersect($this->roles);
    }


    public static function createUser( Request $request ){
        $user = new User();
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save(); // save new user

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->firstname = $request->get('firstname');
        $profile->lastname = $request->get('lastname');
        $profile->picture = $request->get('picture');
        $profile->save(); // save new profile

        return $user;
    }
}
