<?php

// setlocale (LC_TIME, 'fr_FR.utf8','fra');
setlocale(LC_TIME, "fr_FR");
date_default_timezone_set('Indian/Reunion');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fiche/{id}', 'AnimalController@showCard');

Route::post('/geolocaliser_animal', 'AnimalController@sendLocation');

// AUTHENTIFICATION
Auth::routes();

// USER
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index') -> name('home');
    Route::get('/user/modifier/{id}', 'UserController@edit');
    Route::patch('/user/update/{id}', 'UserController@update');
    Route::get('/carnet/{id}', 'HealthRecordController@showCarnet') -> name ('carnet');
    Route::get('/carnet/{id}/nouveau_soin', 'HealthRecordController@addSoin');
    Route::post('/carnet/{id}/ajouter_soin', 'HealthRecordController@storeSoin');
    Route::get('/carnet/supprimer/{id}', 'HealthRecordController@destroySoin');
    Route::get('/carnet/{carnet_id}/editer/{id}', 'HealthRecordController@editSoin');
});

// CARNET DE SANTE

// VETO
Route::prefix('veto') -> group(function() {
    Route::get('/login','Auth\VetoLoginController@showLoginForm') -> name('veto.login');
    Route::post('/login', 'Auth\VetoLoginController@login') -> name('veto.login.submit');
    Route::get('/logout', 'Auth\VetoLoginController@logout') -> name('veto.logout');
    Route::get('/', 'Auth\VetoController@index') -> name('veto.dashboard');
    // Route::get('/carnet/{id}', 'HealthRecordController@showCarnet_veto');
});
