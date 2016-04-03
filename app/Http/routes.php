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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schedule', function () {

	$user = Auth::user();
	$events = App\Event::where('user_id', $user->id)->get();

    return view('schedule')->with('events', $events);
});

Route::get('/add', function () {
    return view('add');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('event', 'EventController');