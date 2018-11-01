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

Route::get('/', 'PageController@welcome');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','PatientController');
Route::resource('patients','PatientController');
Route::resource('social_works','SocialWorkController');
Route::resource('turns', 'TurnController');
Route::resource('assists', 'AssistanceController');

Route::get('{slug}', 'PageController@open');       //Al final. Es para abrir paginas a traves de cierto slug.