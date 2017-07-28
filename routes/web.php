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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/lister', 'ListerController@index');

Route::get('/insert', 'ListerController@insert');

Route::get('/lister_achat', 'ListerController@lister_achat');

Route::get('/panier', 'ListerController@panier');

Route::post('/delete_panier', 'ListerController@delete_panier');

Route::post('/insert_panier', 'ListerController@insert_panier');

Route::post('/insert_action', 'ListerController@insert_action');

Route::post('/update', 'ListerController@update');

Route::post('/update_action', 'ListerController@update_action');

Route::post('/delete', 'ListerController@delete');