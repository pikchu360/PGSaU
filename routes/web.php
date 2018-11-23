<?php

Route::get('/', 'PageController@welcome');

Auth::routes(['verify'=>true]);
Route::get('profile', function(){
    return 'Éste es tu Perfil';
})->middleware('verified');

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

// para ir a la vista que manda mail
Route::get('sendMail', function () {
    return view('sendMail');
});
// mail controller
Route::get('absenceReminder','MailController@absenceReminder');

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