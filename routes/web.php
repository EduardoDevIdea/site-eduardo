<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@index')->name('site'); //Direciona para controller que alimenta dados do site

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/logomarca', 'LogomarcaController', ['except' => ['destroy']]);

Route::resource('/about', 'AboutController', ['except' => ['destroy']]);

Route::get('/curriculo', 'AboutController@showCurriculo')->name('curriculo');
