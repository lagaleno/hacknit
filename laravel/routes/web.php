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
    return view('home');
});

Route::get('/loginResponsavel', function () {
	return view('login');
});

Route::get('/loginEscola', function() {
	return view('login');
});

Route::get('/cadastro', function() {
	return view('cadastro');
});

Route::get('/perfil', function() {
	return view('perfil');
});

Route::get('/matricula', function() {
	return view('matricula');
});

Route::get('/filho', function() {
	return view('filho');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
