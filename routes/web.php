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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cafes','CafesController@index');
//Route::get('/nosotros',['as' => 'nosotros', 'uses' => 'CafesController@nosotros']);
Route::get('/','CafesController@index');
Route::get('/nosotros','CafesController@nosotros');
Route::resource('/tienda','TiendaController');
Route::resource('cafes', 'CafesController');
Route::resource('/productos', 'ProductosController');

Route::get('/cafes',['as' => 'cafes', 'uses' => 'CafesController@tienda']);
Route::get('/nosotros',['as' => 'nosotros', 'uses' => 'CafesController@nosotros']);
Route::get('/tienda',['as' => 'tiendita', 'uses' => 'TiendaController@index']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//otra cosa