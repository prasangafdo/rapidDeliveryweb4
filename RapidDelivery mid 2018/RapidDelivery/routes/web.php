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
Route::resource('courierparcels', 'CourierParcelsController');
Route::resource('senderparcels', 'SenderParcelsController');
Route::resource('receiverparcels', 'ReceiverParcelsController');
Route::resource('parcels', 'ParcelsController');

Route::resource('couriers', 'CouriersController');

//Route::get('pickup', 'ParcelsController@pickup');
//Route::post('parcels/pickup', 'ParcelsController@pickup')->name('parcels.pickup');//This is how we define a new route
//onclick="pickup();"

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
