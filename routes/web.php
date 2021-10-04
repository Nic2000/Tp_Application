<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//  Route::get('/', 'ContactController@index');

// Route::get('/contact', 'ContactController@create')->name('contact');

Route::get('/addContact', 'ContactController@addContact')->name('addContact');

//  Route::get('/contactList', 'ContactController@contactList')->name('contactList');

// Route::delete('/deleteContact/{id?}', 'ContactController@destroy')->name('deleteContact/{id?}');
Route::get('/deleteContact/{id?}', 'ContactController@destroy')->name('deleteContact');

// permetant d'utilser fonction route generer par controller sauf la fonction show quiest exclu
Route::post('/contact', 'ContactController@create')->name('create');

// permetant avoir les liste de contact avec id static(c-a-d si id diff null return la liste sinon return tout liste)
 Route::get('contact.show/{id?}','ContactController@show')->name('show');

 Route::get('/gestion_stagiere', function () {
    return view('stagiaire.table_stagiaire');
});
