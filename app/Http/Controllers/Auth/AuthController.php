<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Xadmin\Models\Profile;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/user/properties';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function create(array $data)
    {
        //dd($data);
        $user = User::create([
            'name' => $data['firstname']. ' '. $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        $profile = Profile::create([
            'user_id' => $user->id,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
        ]);
        return $user;
    }
}
