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

// Route::get('/', function () {
//     return view('welcome');
// });
;
Route::get('/', 'PageController@home');
Route::get('doctor-schedule', 'PageController@doctor_schedule');
Route::get('book-appointment', 'PageController@book_appointment');
Route::get('doctors', 'PageController@all_doctors');
Route::get('add-doctor', 'PageController@add_doctor');
Route::get('profile', 'PageController@doctor_profile');
Route::get('patients', 'PageController@all_patients');
Route::get('add-patient', 'PageController@add_patient');
Route::get('patient-profile', 'PageController@patient_profile');
Route::get('patient-invoice', 'PageController@patient_invoice');
//doctors route
Route::get('doctors/create','DoctorController@create');
Route::post('doctors/create', 'DoctorController@store');
Route::get('doctor/{url}', 'DoctorController@show');
Route::get('doctors/edit/{id}', 'DoctorController@edit');
Route::post('doctors/edit/{id}','DoctorController@update');
Route::get('doctors/delete/{id}', 'DoctorController@delete');
Route::post('doctors/delete/{id}', 'DoctorController@destroy');
//patients route
Route::get('add-patients', 'PatientController@create');
Route::post('add-patients', 'PatientController@store');
Route::get('patient/{url}', 'PatientController@show');
Route::get('patients/edit/{id}', 'PatientController@edit');
Route::post('patients/edit/{id}','PatientController@update');
Route::get('patients/delete/{id}', 'PatientController@delete');
Route::post('patients/delete/{id}',  'PatientController@destroy');
Route::get('patients/files/{url}', 'PatientController@file_create');

Auth::routes();

Route::get('/home', 'PageController@home')->name('home');
Route::get('logout', 'Auth\loginController@logout');
