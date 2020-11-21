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
Route::get('/homeAlum', 'HomeController@getAl')->name('homeAlum');
Route::get('/homeAdmin', 'HomeController@getAd')->name('homeAdmin');
Route::get('/homeTut', 'HomeController@getTut')->name('homeTut');

/**Route::get('/homeTut', 'HomeTutController@index')->name('homeTut');
Route::get('/homeAdmin', 'HomeAdController@index')->name('homeAdmin');
Route::get('/homeAlum', 'HomeAlController@index')->name('homeAlum');*/



Route::group(['middleware' => 'alum'], function () {
    Route::resource('fichas', 'WorksheetController');
    Route::resource('asistencia', 'AssistanceController');
   });

Route::group(['middleware' => 'admin'], function () {
    Route::resource('users', 'UserController');
    Route::resource('ciclos', 'CycleController');
    Route::resource('enterprises', 'EnterpriseController');
   });

Route::group(['middleware' => 'tute'], function () {
    Route::resource('tasks', 'TaskController');
    });

Route::resource('modules','ModuleController');
Route::resource('ces','CeController');


Route::resource('ras','RaController');

