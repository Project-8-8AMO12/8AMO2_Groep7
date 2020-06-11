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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activiteiten', function () {
    return view('pages.activiteiten');
});

Route::get('/agenda', function () {
    return view('pages.agenda');
});

Route::get('/bijenstal', function () {
    return view('pages.bijenstal');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cursussen', function () {
    return view('pages.cursussen');
});

Route::get('/foto', function () {
    return view('pages.foto');
});

Route::get('/nieuws', function () {
    return view('pages.nieuws');
});

Route::get('/stertselaar', function () {
    return view('pages.stertselaar');
});

Route::get('/winkel', function () {
    return view('pages.winkel');
});

Route::get('/zwermgezien', function () {
    return view('pages.zwermgezien');
});
