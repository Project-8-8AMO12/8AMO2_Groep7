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

// Missing login/registration page and route

Route::get('/', 'PageController@index');
Route::get('/activiteiten', 'PageController@activiteiten');
Route::get('/agenda', 'PageController@agenda');
Route::get('/bijenstal', 'PageController@bijenstal');
Route::get('/contact', 'PageController@contact');
Route::get('/cursussen', 'PageController@cursussen');
Route::get('/foto', 'PageController@foto');
Route::get('/nieuws', 'PageController@nieuws');
Route::get('/stertselaar', 'PageController@stertselaar');
Route::get('/vereniging', 'PageController@vereniging');
Route::get('/winkel', 'PageController@winkel');
Route::get('/zwermgezien', 'PageController@zwermgezien');