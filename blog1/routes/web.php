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
	 //return phpinfo(); 
    return view('welcome');
});
//Route::view('viewWater','waters');
//Route::get('/water/{id}','WaterController@index');
Route::get('/waterCtr','WaterController@index');
