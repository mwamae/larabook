<?php


Route::get('/','PagesController@home');
/*
 * Registration
 */
Route::get('register', [
    'as'=>'register_path',
    'uses'=>'RegistrationController@create'
]);

Route::post('register_path', [
    'as'=>'register_path',
    'uses'=>'RegistrationController@store'
]);