<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('login');
});

Route::post('/Registrar', "tiendaController@registrarUsuario");

Route::get('/Calcetin/{id}',"tiendaController@viewCalcetin");

Route::get('/Calcetines', function () {
    return view('Calcetines');
});
Route::get('/Home', function () {
    return view('home');

});
Route::get('/Sweaters', "tiendaController@indexSweaters");

Route::post('/Validate','tiendaController@login')->name('Validate');

