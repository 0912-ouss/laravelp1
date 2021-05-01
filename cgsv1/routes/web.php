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
Route::get('save', 'App\Http\Controllers\cfacture@save');

Route::get('ajfact', 'App\Http\Controllers\cfacture@ajfact');
Route::get('addfactures', function () {
    return view('addfactures');
});
Route::get('AjMod/{num}', function () {
    return view('AjMod');
});

Route::get('AjMod', function () {
    return view('AjMod');
});

Route::get('Mod', function () {
    return view('Mod');
});
Route::get('Detaillfact', function () {
    return view('Detaillfact');
});

Route::get('AjFact/{num}','App\Http\Controllers\facteurat@ajouter');
Route::get('SuDFact/{num}','App\Http\Controllers\facteurat@supprimer');
Route::get('UpDFact/{num}','App\Http\Controllers\facteurat@update');
Route::get('Detaillfact','App\Http\Controllers\DFact@GetAll');

