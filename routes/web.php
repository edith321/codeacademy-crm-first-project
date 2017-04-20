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

use App\models\AprPersons;

Route::get('/', function () {

    return AprPersons::get();
});

Route::get('/new-person', function () {

    return AprPersons::create([
        'id' => \Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Milda',
        'e-mail' => 'milda@inbox.lt',
        'phone' => '+3706389564',
    ]);
});
