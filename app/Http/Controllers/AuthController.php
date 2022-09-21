<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 	public function login()
 	{
 		return view('auths.login');
 	}

 	public function postlogin(Request $request)
 	{
 		$request->validate([
 			'username' => 'required',
 			'password' => 'required',
 		]);

 		$credentials = $request->only('username', 'password');
 		if(Auth::attempt($credentials)){
 			return redirect('/dashboard');
 		}

 		return redirect('/login');
 	}

	public function logout()
	{
		Auth::logout();
    	return redirect('/login');
	}

}
