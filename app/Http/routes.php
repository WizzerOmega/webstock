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
Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout@edit', 'as' => 'logout']);

Route::get('api/auth/x/{login}/y/{mdp}', 'Api\ApiAuthController@getByLoginMdp');

Route::get('api/stat/all', 'Api\ApiStatController@getAll');
Route::get('api/stat/detail', 'Api\ApiStatController@getDetail');
Route::get('api/stat/mensuel', 'Api\ApiStatController@getStatMensuel');

Route::get('api/commande/all', 'Api\ApiCommandeController@getAll');
Route::get('api/commande/{id}', 'Api\ApiCommandeController@getById');
Route::get('api/commande/detail/{num}', 'Api\ApiCommandeController@getDetailByNum');

Route::get('api/produit/all', 'Api\ApiProduitController@getAll');
Route::get('api/produit/{id}', 'Api\ApiProduitController@getById');
Route::get('api/tproduit/all', 'Api\ApiProduitController@getAllTypeProduit');
Route::get('api/produit/all/categ/{id}', 'Api\ApiProduitController@getAllByTypeProduit');

Route::get('api/rdv/all', 'Api\ApiRdvController@getAll');
Route::get('api/rdv/{id}', 'Api\ApiRdvController@getById');
Route::get('api/rdv/rep/{id}', 'Api\ApiRdvController@getByRep');
Route::get('api/client/all', 'Api\ApiClientController@getAll');
Route::get('api/client/{id}', 'Api\ApiClientController@getById');
Route::get('api/representant/all', 'Api\ApirepresentantController@getAll');
Route::get('api/representant/{id}', 'Api\ApirepresentantController@getById');

Route::get('matiere/association', 'MatiereController@association');

Route::get('profil', ['uses' => 'UsersController@edit', 'as' => 'profil']);
Route::post('profil', ['uses' => 'UsersController@update']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::resource('home', 'HomeController');
Route::resource('client', 'ClientController');

Route::get('profil', ['uses' => 'UsersController@edit', 'as' => 'profil']);
Route::post('profil', ['uses' => 'UsersController@update']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('fournisseur', 'FournisseurController');
Route::resource('commande', 'CommandeClientController');
Route::resource('produit', 'ProduitController');
Route::resource('matiere', 'MatiereController');
Route::resource('stat', 'StatController');
