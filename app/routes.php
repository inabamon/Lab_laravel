<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
	return View::make('index');
});

Route::get('bd_imag', array('as' => 'bd_imag.list', 'uses' => 'BdimagController@bdlist'));

Route::get('bd_imag/order', array('as' => 'bd_imag.order', 'uses' => 'BdimagController@getbdorder'));

Route::post('bd_imag/order', array('as' => 'bd_imag.order', 'uses' => 'BdimagController@bdorder'));

Route::get('bd_imag/{id}', array('as' => 'bd_imag.list.{id}', 'uses' => 'BdimagController@bditem'));