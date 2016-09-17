<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/leads', 'LeadController');

Route::resource('/accounts', 'AccountController');

Route::get('accounts/{account}/search/contacts', 'AccountSubController@showSearchContact')->name('accounts.searchcontacts');
Route::post('/accounts/search/contacts', 'AccountSubController@searchContact')->name('accounts.search.contacts');
Route::post('/accounts/attach/contacts', 'AccountSubController@attachContact')->name('accounts.attach.contacts');

Route::resource('/contacts', 'ContactController');

Route::resource('/tickets', 'TicketController');
