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

Route::get('/', function() {
   return view('welcome');
});

Route::get('/persons', [
    'uses' => 'AprPersonsController@index'
]);
Route::get('/clients', [
    'uses' => 'AprClientsController@index'
    ]);

Route::get('/projects', [
    'uses' => 'AprProjectsController@index'
]);
Route::get('/loginsConnections', [
    'uses' => 'AprProjectsLoginsConnectionsController@index'
]);

Route::group(['prefix' => 'people'], function () {
    Route::get('/generate-fake-data/persons/{count?}', [
        'uses' => 'AprFakeDataController@generatePersons'
    ]);
    Route::get('/generate-fake-data/clients/{count?}', [
        'uses' => 'AprFakeDataController@generateClients'
    ]);

});
Route::group(['prefix' => 'types'], function () {
    Route::get('/generate-fake-data/personsClientsTypes/{count?}', [
        'uses' => 'AprFakeDataController@generateClientsPersonsTypes'
    ]);
    Route::get('/generate-fake-data/employeeTypes/{count?}', [
        'uses' => 'AprFakeDataController@generateEmployeeTypes'
    ]);
    Route::get('/generate-fake-data/projectsTypes/{count?}', [
        'uses' => 'AprFakeDataController@generateProjectsTypes'
    ]);
});

Route::group(['prefix' => 'logins'], function () {
    Route::get('/generate-fake-data/loginsPlaces/{count?}', [
        'uses' => 'AprFakeDataController@generateLoginsPlaces'
    ]);
    Route::get('/generate-fake-data/projectsLogins/{count?}', [
        'uses' => 'AprFakeDataController@generateProjectsLogins'
    ]);
});
Route::group(['prefix' => 'connections'], function () {
    Route::get('/generate-fake-data/clientsPersonsTypesConnections/{count?}', [
        'uses' => 'AprFakeDataController@generateClientsPersonsTypesConnections'
    ]);
    Route::get('/generate-fake-data/projectsLoginsConnections/{count?}', [
        'uses' => 'AprFakeDataController@generateProjectsLoginsConnections'
    ]);
    Route::get('/generate-fake-data/projectsTypesPersonsConnections/{count?}', [
        'uses' => 'AprFakeDataController@generateProjectsTypesPersonsConnections'
    ]);
});




















