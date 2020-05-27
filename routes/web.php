<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');

Route::get('/jhlz974', 'VetoController@index') -> name('veto_home');

Route::prefix('veto') -> group(function() {
    Route::get('/login','Auth\VetoLoginController@showLoginForm') -> name('veto.login');
    Route::post('/login', 'Auth\VetoLoginController@login') -> name('veto.login.submit');
    Route::get('/logout', 'Auth\VetoLoginController@logout') -> name('veto.logout');
    Route::get('/', 'Auth\VetoController@index') -> name('veto.dashboard');
});
