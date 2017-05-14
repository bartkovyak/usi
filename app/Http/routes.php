<?php

// Route::metoda('sciezka', ['uses' => 'Kontroler@metoda']);

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('doctor', array('as' => 'read_doctors', 'uses' => 'DoctorController@show'));
Route::get('doctor/{id}', array('as' => 'read_doctor', 'uses' => 'DoctorController@get'));
Route::get('doctor/{id}/appointment', array('as' => 'read_doctor_appointments', 'uses' => 'DoctorController@getAppointments'));
