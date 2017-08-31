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

Route::get('/branch:{branch}/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile', 'ProfileController@update')->name('profile.update');
Route::post('/profile/avatar', 'ProfileController@updateAvatar')->name('profile.avatar');
Route::post('/profile/password', 'ProfileController@updatePassword')->name('profile.password');

Route::get('/company/register', 'CompaniesController@create')->name('company.create');
Route::get('/company/settings', 'CompaniesController@edit')->name('company.settings');
Route::post('/company/update', 'CompaniesController@update')->name('company.update');
Route::post('/company/logo', 'CompaniesController@updateLogo')->name('company.logo');

Route::get('/branches', 'BranchesController@index')->name('branches');
Route::post('/branches/register', 'BranchesController@store')->name('branch.register');
Route::get('/branch/settings', 'BranchesController@edit')->name('branch.settings');
Route::post('/branches/update', 'BranchesController@update')->name('branch.update');
Route::delete('/branches/{branch}', 'BranchesController@destroy')->name('branch.delete');

Route::post('/company', 'CompaniesController@store')->name('company.register');

Route::get('/branch:{branch}/vehicles', 'VehiclesController@index')->name('vehicles');
Route::post('/vehicles', 'VehiclesController@store')->name('vehicles.store');
Route::get('/branch:{branch}/vehicles/new', 'VehiclesController@create')->name('vehicles.create');
Route::get('/branch:{branch}/vehicles/{vehicle}/edit', 'VehiclesController@edit')->name('vehicles.edit');
Route::get('/branch:{branch}/vehicles/{vehicle}', 'VehiclesController@show')->name('vehicles.show');
Route::post('/vehicles/{vehicle}', 'VehiclesController@update')->name('vehicles.update');
Route::delete('/branch:{branch}/vehicles/{vehicle}', 'VehiclesController@destroy')->name('vehicles.delete');