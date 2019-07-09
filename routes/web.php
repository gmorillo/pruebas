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
Route::get('/registration-property', function () {
    return view('asset-master.properties.registration-properties');
})->name('regProperty');

Route::get('/map', function () {
    return view('asset-master.properties.map');
})->name('map');



Route::get('dropdownlist','DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');



Route::get('ajax-form-submit', 'FormController@index');
Route::post('save-form', 'FormController@store')->name('save-form');
Route::get('delete/{id}', 'FormController@destroy');

Route::get('/search', 'SearchController@index')->name('users');