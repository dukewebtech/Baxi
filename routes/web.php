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

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('test');
});
Route::get('/mydata', function () {
    return view('mydata');
});
Route::get('/ms', function () {
    return view('mytry');
});

Route::get('/{servicetype}', 'BaxiServiceController@retrieveallBouquets');

// Route::get('/{serviceType}/{productCode}', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/form/{serviceType}/{productCode}', 'BaxiServiceController@retrieveProviderAddons');


Route::get('/gotv', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/startimes', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/dstv', 'BaxiServiceController@retrieveProviderAddons');
Route::get('/submitForm', 'BaxiServiceController@retrieveProviderAddons');
