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
    return view('welcome');
});
Route::get('ajfature', function () {
    return view('ajfature');
});
Route::get('allfacture', 'App\Http\Controllers\cfacture@getfacture');


Route::get('getfacture', 'App\Http\Controllers\cfacture@getfacture');
//Route::get('register', 'Api\RegisterController@register');
Route::get('getfacture/{num}', 'App\Http\Controllers\cfacture@getone');
Route::get('ajfact', 'App\Http\Controllers\cfacture@ajfact');



