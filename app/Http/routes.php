<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('client', 'ClientController@index');
Route::post('client', 'ClientController@store');
Route::get('client/{id}', 'ClientController@show');
Route::get('client/{id}', 'ClientController@destroy');