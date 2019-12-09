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


Route::view('/privacy-police', 'policies/privacy-police');

Route::get('/perfil','ControllerPerfil@verVistaPerfil');
Route::get('/veter','ControllerPerfil@verVistaVeterinario');

//arreglo para el feed
Route::get('/feed','FeedController@feed');
Route::get('/registrarPet','Auth\RegisterController@registrarMascota');
Route::get('/registrarVete','Auth\RegisterController@registrarVete');

Route::get('/feed2','Peek\FeedController@feed2');


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

Route::post('/save-extra-info-pet',      'Auth\RegisterController@savePet');
Route::post('/save-extra-info-company',  'Auth\RegisterController@saveCompany');
Route::post('/cancel-register',           'Auth\RegisterController@cancelRegister');

// Facebook
Route::post('/open-extra-info-view', 'Auth\RegisterController@redirectToSelectedView');



/**+-----------------------------------------------------------------------+
 * |
 * |             Rutas De Aurelio 
 * |
   +-----------------------------------------------------------------------+*/
Route::get('/newpost',  'Auth\NewPostController@verVista');
Route::post('/savenewpost',     'Auth\NewPostController@saveNewPost');
Route::post('/cancel-post',           'Auth\NewPostController@cancelRegister');