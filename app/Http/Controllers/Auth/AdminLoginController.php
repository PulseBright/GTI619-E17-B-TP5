<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //

    public function __construct(){
    	$this->middleware('guest:admin');
    }

    public function showLoginForm(){

    	return view('auth.admin-login');

    }

    public function login(Request $request){

    	//validate form
    	$this->validate($request, [
    		'email'	=> 'required|email',
    		'password'	=> 'required|min:6'


    		]);

    	// attempt to log in
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		//code
			// if success redirect

    		//return redirect()->intended(route('homeadmin'));
    		return redirect()->intended(route('homeadmin'));

    	}

    	//if fail redirect back
    	return redirect('home');


    	
    }

    
}
