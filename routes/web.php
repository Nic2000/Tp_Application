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



// permetant d'utilser fonction route generer par controller sauf la fonction show quiest exclu
Route::resource('contact', 'ContactController')->except(['show']);

// permetant avoir le path d'ajouter nouveau contact
Route::get('contact.add_contact','ContactController@add_contact')->name('add_contact');

// permetant avoir le path d'ajouter nouveau contact
Route::post('/contact.create','ContactController@create')->name('create');


// permetant avoir les liste de contact avec id static(c-a-d si id diff null return la liste sinon return tout liste)
Route::get('contact.show/{id?}','ContactController@show')->name('show');

Route::get('/','webapp\LoginController@index')->name('login');
