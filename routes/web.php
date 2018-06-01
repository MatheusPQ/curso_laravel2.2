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


Route::get('/', 'HomeController@index');
//Ao tentar entrar na rota abaixo, vai redirecionar para a home
//caso já esteja logado.
// Route::get('/login', 'LoginController@index')->middleware('guest');

//Permite acessar, se estiver logado.
// Route::get('/login', 'LoginController@index')->middleware('auth');

Route::get('/login', 'LoginController@index')->middleware('my_auth');
Route::get('/posts', 'PostController@index');
