<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('pet', 'PetsController');

Route::resource('owner' , 'OwnersController');

Route::resource('vaccine' , 'VaccinesController');

Route::resource('certificate' , 'CertificatesController');

Route::resource('veterinary' , 'VeterinariesController');

Route::resource('pet_vaccine' , 'PetVaccineController');

Route::get('/print_pet_certificate', 'PetsController@printPetCertificate');