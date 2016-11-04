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

Route::get('articulos/{nombre}', function($nombre) {
	echo "Esta es la sección de articulos";
	echo "Tu nombre es: " . $nombre;
});

Route::group(['prefix' => 'poyoyones'], function() {
	Route::get('papud/{algo?}', function($algo = "Puto"){
		echo 'Ya hasta alv: ' . $algo;
	});
});
