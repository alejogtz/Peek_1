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
    return view('welcome');
});

Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');


Route::view('/privacy-police', 'policies/privacy-police');

Route::get('/perfil','ControllerPerfil@verVistaPerfil');
Route::get('/veter','ControllerPerfil@verVistaVeterinario');



/**+-----------------------------------------------------------------------+
 * |                                                                       
 * |             Rutas para el Caso de uso:
 * |              Login con Fb, Goo y Email                                                     
 * |                                                                       
   +-----------------------------------------------------------------------+*/
Route::get('/redirect',     'SocialAuthFacebookController@redirect');
Route::get('/callback',     'SocialAuthFacebookController@callback');
Route::get('/redirectgoo',  'Auth\LoginController@redirectToProvider');
Route::get('/callbackgoo',  'Auth\LoginController@handleProviderCallback');

Route::post('/save-extra-info-pet/{user_id}',      'Auth\RegisterController@savePet');
Route::post('/save-extra-info-company/{user_id}',  'Auth\RegisterController@saveCompany');
Route::post('/cancel-register/{user_id}',           'Auth\RegisterController@cancelRegister');

