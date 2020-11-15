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


Route::get('/contacts/listeDesContacts', 'contactController@get_ListeDesContacts');

Route::get('/contacts/delete/{id}', 'contactController@delete_Contact');
Route::post('/contacts/edit/{id}', 'contactController@edit_Contact');



Route::get('/contacts/detailsContact/{id}', 'contactController@show_DetailsContact');
