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
    return view('addfactures');
});//
Route::get('upfature', function () { return view('upfacture');});//
   

Route::get('allfacture', 'App\Http\Controllers\cfacture@getfacture');


Route::get('getfacture/{num}', 'App\Http\Controllers\cfacture@getone');
Route::get('deletefacture/{num}', 'App\Http\Controllers\cfacture@delete');
Route::get('updatefacture/{num}', 'App\Http\Controllers\cfacture@update');
Route::get('savee', 'App\Http\Controllers\cfacture@save');

Route::get('ajfact', 'App\Http\Controllers\cfacture@ajfact');
Route::get('addfactures', function () {
    return view('addfactures');
});


