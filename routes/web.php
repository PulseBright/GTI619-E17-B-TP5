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

//Route::get('/home', 'HomeController@index');

Route::get('/home', array('before' => 'auth', function()
{
    if(Entrust::hasRole('pa')) {
		$clientspa = DB::table('clients')->where('type', 'pa')->get();
		return View::make('homepa', compact('clientspa'));
	}
	else if(Entrust::hasRole('admin')) {
		return View::make('homeadmin');
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


/*
Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('homeadmin');
});

Route::get('/parametres', 'AdminController@parametres')->name('parametres');

Route::get('/pr/login', 'Auth\PreposeResidentielLoginController@showLoginForm')->name('pr.login');
Route::post('/pr/login', 'Auth\PreposeResidentielLoginController@login')->name('pr.login.submit');
Route::get('/pr/home', 'PreposeResidentielController@index')->name('homepr');

Route::get('/pa/login', 'Auth\PreposeAffaireLoginController@showLoginForm')->name('pa.login');
Route::post('/pa/login', 'Auth\PreposeAffaireLoginController@login')->name('pa.login.submit');
Route::get('/pa/home', 'PreposeAffaireController@index')->name('homepa');
*/
