<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PreposeAffaireLoginController extends Controller
{
    //

    public function __construct(){
    	$this->middleware('guest:preposeAffaire');
    }

    public function showLoginForm(){

    	return view('auth.preposeAffaire-login');

    }

    public function login(Request $request){

    	//validate form
    	$this->validate($request, [
    		'email'	=> 'required|email',
    		'password'	=> 'required|min:6'


    		]);

    	// attempt to log in
    	if (Auth::guard('preposeAffaire')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		//code
			// if success redirect

    		//return redirect()->intended(route('homeadmin'));
    		return redirect()->intended(route('homePreposeAffaire'));

    	}

    	//if fail redirect back
    	return redirect('home');


    	
    }

    
}
