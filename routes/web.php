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

Route::resource('/contacts', 'ContactController');

Route::resource('/tickets', 'TicketController');

// Account Contact Routes
Route::get('accounts/{account}/search/contacts', 'AccountContactController@showSearch')->name('accounts.searchcontacts');
Route::get('accounts/{account}/contacts/{contact}', 'AccountContactController@show')->name('accounts.contacts.show');
Route::post('/accounts/search/contacts', 'AccountContactController@search')->name('accounts.search.contacts');
Route::post('/accounts/attach/contacts', 'AccountContactController@attach')->name('accounts.attach.contacts');

// Account Ticket Routes
Route::get('accounts/{account}/contacts/{contact}/tickets/create', 'AccountTicketController@create')->name('accounts.contacts.tickets.create');
