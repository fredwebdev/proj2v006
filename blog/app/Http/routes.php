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

// Route::get('/', function () {return view('welcome');});


// accueil
Route::get('/', function () {return view('Accueil.index');});


// menu
Route::resource('accueil', 'AccueilController');
Route::resource('revues', 'RevueController');
Route::resource('articles', 'ArticleController');
// EvenementController
//Route::get('evenement', function(){return view('Evenements.index');});
//Route::resource('evenement', 'EvenementController');
Route::get('evenement', ['as'=>'evenement', 'uses'=>'EvenementController@evenement']);

// admin
Route::group(['middleware' => 'auth'], function(){
    Route::resource('evenements', 'EvenementAdminController');
});
// logout
Route::get('logout', 'AuthController@logout');

// inscription
Route::group(['middleware' => 'guest'], function(){
    Route::get('inscription', 'AuthController@getRegister');
    Route::post('inscription', 'AuthController@postRegister');

    Route::get('connexion', 'AuthController@getLogin');
    Route::post('connexion', 'AuthController@postLogin');
});

// contact


Route::get('contact', 'EmailController@contact');
Route::post('getContactUsForm','EmailController@getContactUsForm');
Route::post('contact_request','EmailController@getContactUsForm');