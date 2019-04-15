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

Route::get('/','FormController@welcome');

Route::get('/register','FormController@form');

Route::get('/practice/{title}','FormController@practice');

Route::get('/confirmation','FormController@confirm_page');

Route::post('/submit_form','FormController@process_form');

/* This is for practice*/

//Route::any('/practice/{n?}', 'PracticeController@index');
