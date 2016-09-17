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

Route::get('/accounts/{account_id}/contacts/create', 'AccountSubController@createContact');

Route::resource('/contacts', 'ContactController');

Route::resource('/tickets', 'TicketController');
