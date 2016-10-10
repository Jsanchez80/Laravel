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


// You can type the return command with double quotes and not have to concatonate:
	// return "Hello $name";
Route::get('/sayhello/{name}', function($name) {
	return 'Hello ' . $name;
});

// you can customize the user experience by coding the name as so...
Route::get('/sayhello/{name?}', function($name = 'Lassen') {
	return 'Hello ' . $name;
});

Route::get('/sayhello/{name}', function($name) {
	if ($name == 'Chris') {
		return redirect('/');
	}
	return 'Hello ' . $name;
});