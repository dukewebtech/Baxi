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
    return view('test');
});

Route::get('/m', function () {
    return view('modal');
});


Route::get('/', 'BaxiServiceController@retrieveDstvBouquets');
Route::get('/form', 'BaxiServiceController@retrieveProviderAddons');


Route::get('/gotv', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/startimes', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/dstv', 'BaxiServiceController@retrieveProviderAddons');

