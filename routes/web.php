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


Route::get('/persons', [
    'uses' => 'AprPersonsController@index'
]);
Route::get('/clients', [
    'uses' => 'AprPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count?}', [
    'uses' => 'AprFakeDataController@generatePersons'
]);
Route::get('/generate-fake-data/clients/{count?}', [
    'uses' => 'AprFakeDataController@generateClients'
]);
Route::get('/generate-fake-data/projects/{count?}', [
    'uses' => 'AprFakeDataController@generateProjects'
]);
Route::get('/generate-fake-data/projectsTypes/{count?}', [
    'uses' => 'AprFakeDataController@generateProjectsTypes'
]);
Route::get('/generate-fake-data/loginsPlaces/{count?}', [
    'uses' => 'AprFakeDataController@generateLoginsPlaces'
]);
Route::get('/generate-fake-data/projectsLogins/{count?}', [
    'uses' => 'AprFakeDataController@generateProjectsLogins'
]);
Route::get('/generate-fake-data/personsClientsTypes/{count?}', [
    'uses' => 'AprFakeDataController@generateClientsPersonsTypes'
]);
Route::get('/generate-fake-data/clientsPersonsTypesConnections/{count?}', [
    'uses' => 'AprFakeDataController@generateClientsPersonsTypesConnections'
]);
Route::get('/generate-fake-data/projectsLoginsConnections/{count?}', [
    'uses' => 'AprFakeDataController@generateProjectsLoginsConnections'
]);
Route::get('/generate-fake-data/projectsTypesPersonsConnections/{count?}', [
    'uses' => 'AprFakeDataController@generateProjectsTypesPersonsConnections'
]);
Route::get('/generate-fake-data/employeeTypes/{count?}', [
    'uses' => 'AprFakeDataController@generateEmployeeTypes'
]);
