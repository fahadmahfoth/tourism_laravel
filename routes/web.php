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


Auth::routes(['register' => false]);


Route::get('/', function () {
    
    return view('welcome');
});

Route::resource('/users', 'Admin\UsersAdminController'); 
Route::resource('/places', 'Admin\PlaceAdminController'); 
Route::resource('/categoreis', 'Admin\PlaceCategoryAdminController'); 
Route::resource('/suggests', 'Admin\SuggestsAdminController'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
