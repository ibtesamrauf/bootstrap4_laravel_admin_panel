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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Route::get('/component_button', 'HomeController@component_button')->name('component_button');
Route::get('/component_card', 'HomeController@component_card')->name('component_card');
Route::get('/utilities_color', 'HomeController@utilities_color')->name('utilities_color');
Route::get('/utilities_border', 'HomeController@utilities_border')->name('utilities_border');
Route::get('/utilities_animation', 'HomeController@utilities_animation')->name('utilities_animation');
Route::get('/utilities_other', 'HomeController@utilities_other')->name('utilities_other');
Route::get('/login_page', 'HomeController@login_page')->name('login_page');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/forgot_password', 'HomeController@forgot_password')->name('forgot_password');
Route::get('/blank_page', 'HomeController@blank_page')->name('blank_page');
Route::get('/chart', 'HomeController@chart')->name('chart');
Route::get('/table', 'HomeController@table')->name('table');
