<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // attempt to do the login
        $auth = Auth::attempt(
            [
                'username'  => strtolower(Input::get('username')),
                'password'  => Input::get('password')    
            ]
        );
        if ($auth) {
            return Redirect::to('home');
        } else {
            // validation not successful, send back to form 
            return Redirect::to('/')
                ->withInput(Input::except('password'))
                ->with('flash_notice', 'Your username/password combination was incorrect.');
        }
    }
}
