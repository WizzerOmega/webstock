<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('api/commande/all', 'Api\ApiCommandeController@getAll');
Route::get('api/commande/{id}', 'Api\ApiCommandeController@getById');

Route::get('api/produit/all', 'Api\ApiProduitController@getAll');
Route::get('api/produit/{id}', 'Api\ApiProduitController@getById');
Route::get('api/tproduit/all', 'Api\ApiProduitController@getAllTypeProduit');
Route::get('api/produit/all/categ/{id}', 'Api\ApiProduitController@getAllByTypeProduit');

Route::get('api/client/all', 'Api\ApiClientController@getAll');
Route::get('api/client/{id}', 'Api\ApiClientController@getById');

Route::resource('home', 'HomeController');
Route::resource('client', 'ClientController');
Route::resource('fournisseur', 'FournisseurController');
Route::resource('commande', 'CommandeController');

