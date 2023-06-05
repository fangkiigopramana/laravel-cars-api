<?php

use Illuminate\Support\Facades\Route;

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
    return [
        'data' => [
            'url-api-cars' => 'http://127.0.0.1:8000/api/cars',
            'url-api-one-car' => 'http://127.0.0.1:8000/api/cars/{id}',
            'url-api-types' => 'http://127.0.0.1:8000/api/types',
            'url-api-one-types' => 'http://127.0.0.1:8000/api/types/{id}',
        ]
    ];
});
