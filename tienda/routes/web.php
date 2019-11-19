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


Route::get('/login', function () {
  return view('login');}
);

Route::get('/Home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/Sweaters', "tiendaController@indexSweaters");

Route::post('/Registrar', "tiendaController@registrarUsuario");

//Route::get('/Calcetin/{id}',"tiendaController@viewCalcetin");

<<<<<<< HEAD
Route::get('/Calcetines',"tiendaController@viewCalcetines");
=======
Route::get('/Calcetines', function () {
    return view('Calcetines');

Route::get('/Home', function () {
    return view('home');

});
Route::get('/Sweaters', "tiendaController@indexSweaters");
>>>>>>> 6b9fbfaed0c0458495e32cf739da904373f6ac86
