<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
    	$user =  \App\Models\User::simplePaginate(10);
    	return view('user.user', ['user' => $user]);
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:msuser,username',
            'userpassword' => 'required|confirmed|min:6'
        ]);

    	$user = new \App\Models\User();
        $user->username = $request->input('username');
        $user->userpassword = app('hash')->make($request->input('userpassword'));
        $user->createdby = Auth::user()->userid;
        $user->updatedby = Auth::user()->userid;
        $user->save();
    	return redirect('/user');
    }

    public function edit($id)
    {
    	$user = \App\Models\User::find($id);
    	return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|unique:msuser,username',
            'userpassword' => 'required|confirmed|min:6'
        ]);
        
			$row = \App\Models\User::find($id);
    		$row->username = $request->get('username');
            $row->updatedby = Auth::user()->userid;

            if(!empty($request->get('userpassword')))
                $row->userpassword = app('hash')->make($request->get('userpassword'));

            $row->save();

            return redirect('/user');
    }

    public function delete($id)
    {
    	$user = \App\Models\User::find($id);
        $user->delete();
    	return redirect('/user');
    }

}
