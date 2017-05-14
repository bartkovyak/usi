<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

// Doctor
Route::post('doctor/create', 'DoctorController@create');
Route::match(['post', 'put'], 'doctor/{id}/edit', 'DoctorController@edit');
Route::match(['get', 'delete'], 'doctor/{id}/delete', 'DoctorController@delete');
Route::get('doctor/{id}', array('as' => 'read_doctor', 'uses' => 'DoctorController@get'));
Route::get('doctor/{id}/appointment', array('as' => 'read_doctor_appointments', 'uses' => 'DoctorController@getAppointments'));
Route::get('doctor/{id}/appointment/{aid}', 'DoctorController@getAppointment');
Route::get('doctor', array('as' => 'read_doctors', 'uses' => 'DoctorController@show'));
Route::get('doctor/speciality/{id}', 'DoctorController@getForSpeciality');

// Patient
Route::post('patient/create', 'PatientController@create');
Route::match(['get', 'delete'], 'patient/{id}/delete', 'PatientController@delete');
Route::get('patient/{id}', 'PatientController@get');
Route::get('patient/{id}/appointment', 'PatientController@getAppointments');
Route::get('patient/{id}/appointment/{aid}', 'PatientController@getAppointment');
Route::get('patient', 'PatientController@show');

// Appointment
Route::get('appointment/{id}', 'AppointmentController@get');
Route::get('appointment', 'AppointmentController@show');

// Speciality
Route::get('speciality/{id}', 'SpecialityController@get');
Route::get('speciality', 'SpecialityController@show');