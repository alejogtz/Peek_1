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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::view('/privacy-police', 'policies/privacy-police');



Route::get('/redirectgoo', 'Auth\LoginController@redirectToProvider');
Route::get('/callbackgoo', 'Auth\LoginController@handleProviderCallback');

Route::get('/perfil','ControllerPerfil@verVistaPerfil');
Route::get('/veter','ControllerPerfil@verVistaVeterinario');

