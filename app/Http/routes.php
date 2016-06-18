<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    // Route::get("index","moreAdd@index");
    // Route::get("store","moreAdds@store");
    // Route::post("store","moreAdd@store");

    // Route::post("store","logins@store");
Route::get('hotel',['middleware' =>'auth',function () {
    return view('pages.hotel');
}]);
Route::get('/', function () {
    return view('pages.index');
});
Route::resource('flights', 'flightController');
Route::get('logins', function () {
    return view('pages.logins');
});

Route::get('book', function () {
    return view('pages.book');
});
// Route::get('/','usersController@index');

// This route is responsible for authentication.
Route::auth();

Route::get('/home', 'HomeController@index');
