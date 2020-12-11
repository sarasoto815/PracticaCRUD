<?php

use Illuminate\Support\Facades\Route;


/*COMENZAMOS RUTAS CRUD*/

Route::get ('/show', 'Crud@index');
Route::get ('/insert', 'Crud@create');
Route::get ('/detail/{id}', 'Crud@show');
Route::post ('/save', 'Crud@store');
Route::post ('/update', 'Crud@update');
Route::get ('/delete/{id}', 'Crud@destroy');

/*TERMINAMOS RUTAS CRUD*/
Route::get('/', function () {
    return view('welcome');
});
