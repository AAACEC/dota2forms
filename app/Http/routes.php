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

Route::get('/{form}', function ($form) {
	return view($form);
});

Route::post('/{form}', function ($form) {
	$json = json_encode(Input::all());
	App\Submission::create(compact('form', 'json'));

	return view('thanks');
});
