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

$s = 'oauth.';
Route::get('/oauth/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\SocialController@getSocialRedirect']);
Route::get('/oauth/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\SocialController@getSocialHandle']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/company/register', 'CompaniesController@create')->name('company.create');
Route::get('/company/settings', 'CompaniesController@edit')->name('company.settings');
Route::post('/company/update', 'CompaniesController@update')->name('company.update');
Route::post('/company/logo', 'CompaniesController@updateLogo')->name('company.logo');

Route::post('/company', 'CompaniesController@store')->name('company.register');

Route::get('/vehicles', function () {
    return view('vehicles.index');
});