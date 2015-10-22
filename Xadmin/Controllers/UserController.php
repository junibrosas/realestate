<?php

namespace Xadmin\Controllers;

use Illuminate\Http\Request;
use App\Http\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('cms::user.users', compact('user'));
    }

    public function create( Request $request )
    {
        $user = new User();
        return view('cms::user.user', compact('user'));       
    }

    
    public function store( Request $request )
    {
        $user = User::createUser( $request );
        
        return redirect()->route('admin.users.edit', [$user->id]);
    }


    public function show($id)
    {

    }

  
    public function edit($id)
    {
        $user = User::find($id);
        return view('cms::user.user', compact('user'));
    }

 
    public function update(Request $request, $id)
    {
        _trace( $request->all() );
    }

   
    public function destroy($id)
    {
        
    }
}
