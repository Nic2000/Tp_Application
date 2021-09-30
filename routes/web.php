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

Route::get('/', function () {
    return view('welcome');
});
//formulaire contact
Route::get('/contact', 'ContactController@create')->name('contact');
//add contact
Route::post('/addContact', 'ContactController@addContact')->name('addContact');
//find all contacts
Route::get('/contactList', 'ContactController@contactList')->name('contactList');
//delete contact
Route::get('/deleteContact/{id?}', 'ContactController@deleteContact')->name('deleteContact/{id?}');
?>
