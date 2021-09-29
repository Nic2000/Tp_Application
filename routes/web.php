<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('contact', 'ContactController')->except(['show']);
Route::get('contact.add_contact','ContactController@add_contact')->name('add_contact');
Route::get('contact.show/{id?}','ContactController@show')->name('show');
