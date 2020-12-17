<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(){
    	return view ('admin.login');
    }

    public function loginPost(Request $request){
    	if (Auth::attempt($request->only('email','password'))) {
            return redirect('/admin-miftahul');
        }
        return redirect ('/login');
    }

    public function logout(){
    Auth::logout();
    return redirect ('/login');
}

}
