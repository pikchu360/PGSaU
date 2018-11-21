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

/*Route::group(['middleware' => ['web']], function() {
    Route::resource('patients','PatientController');
    Route::POST('editPatient','PatientController@editPatient');

    //Route::resource('licenses', 'LicenseController');
    //Route::POST('editLicense', 'LicenseController@editLicense');
});*/

Auth::routes();
Route::get('storage/{archivo}', function ($archivo) {
    $files = Storage::allFiles(Auth::user()->id);
     //verificamos si el archivo existe y lo retornamos
     foreach( $files as $file){
          if ($file == $archivo)
          {
              return Storage::response($archivo);
             
          }
     //si no se encuentra lanzamos un error 404.
        }
 
});
Route::post('storage/create', 'StorageController@save');
Route::get('createInassist/{id}','AssistanceController@createInassist')->name('createInassist');

Route::resource('imagenes', 'ImageController');

Route::resource('users','UserController');
Route::resource('patients','PatientController');
Route::resource('social_works','SocialWorkController');
Route::resource('turns', 'TurnController');
Route::resource('assists', 'AssistanceController');
Route::resource('licenses', 'LicenseController');

Route::get('{slug}', 'PageController@open');       //Al final. Es para abrir paginas a traves de cierto slug.