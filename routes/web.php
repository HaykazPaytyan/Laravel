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


Route::get('/','HomeController@index')->name('home.index');

Route::get('/about','AboutController@index')->name('about.index');

Route::get('/auth','AuthController@index')->name('auth.index');

Route::post('/register','RegisterController@store')->name('register.store');

Route::post('/login','LoginController@store')->name('login.store');

Route::post('/logout','LoginController@logout')->name('login.logout');


Route::resource('jobs', 'JobsController');


Route::get('/profile/{name}','ProfileController@show')->name('profile.show');

Route::get('/profile/{name}/edit','ProfileController@edit')->name('profile.edit');

Route::patch('/profile/{name}','ProfileController@update')->name('profile.update');





