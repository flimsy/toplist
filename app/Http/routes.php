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
	$data = array(
		'entries' => App\entry::paginate(1)
		);
    return view('welcome', $data);
});

Route::get('entry', function() {
	$entries = App\entry::all();
	foreach ($entries as $entry) {
	echo $entry->entry_name . " submitted By " . $entry->user->name . "<br />"; 		
	}
});

Route::auth();

Route::get('submit', 'SubmitController@index');
Route::get('/home', 'HomeController@index');
