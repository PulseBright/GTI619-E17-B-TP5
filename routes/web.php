<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', array('before' => 'auth', function()
{
    if(Entrust::hasRole('pa')) {
		$clientspa = DB::table('clients')->where('type', 'pa')->get();
		return View::make('homepa', compact('clientspa'));
	}
	else if(Entrust::hasRole('admin')) {
		$clientspa = DB::table('clients')->where('type', 'pa')->get();
		$clientspr = DB::table('clients')->where('type', 'pr')->get();
		return View::make('homeadmin', compact('clientspa', 'clientspr'));
	}
	else if(Entrust::hasRole('pr')){
		$clientspr = DB::table('clients')->where('type', 'pr')->get();
		return View::make('homepr', compact('clientspr'));
	}
	else {
		Auth::logout();
		return Redirect::to('/login')
			->with('flash_notice', 'Acc&#232;s refus&#233;!');
	}
}));

Route::post('/security', 'AdminController@edit');