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
Route::resource('barang','barangController');

Route::resource('siswa','siswaController');
Route::resource('distributor','distributorController');
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');
Route::get('/', function () {
    return view('welcome');
});


