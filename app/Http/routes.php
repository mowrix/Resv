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
    Route::get("index","moreAdd@index");
    Route::get("store","moreAdds@store");
    Route::post("store","moreAdd@store");

    // Route::post("store","logins@store");

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('pages.index');
});
Route::get('users', function () {
    return view('pages.users');
});
Route::get('logins', function () {
    return view('pages.logins');
});

Route::get('test2', function () {
    return view('pages.test2');
});
Route::get('/','usersController@index');
