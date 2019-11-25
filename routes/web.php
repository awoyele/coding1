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

//Route::get('/', function () {
//    return view('welcome');
//	return view('signup');
//});


Route::view('/', "welcome");
Route::view('signup', "signup");
Route::view('visit', "visit");
Route::view('upcoming', "upcoming");


Route::post('add_patient', "Users@add_patient");
Route::post('add_visit_patient', "Visits@add_visit_patient");