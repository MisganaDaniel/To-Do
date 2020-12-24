<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('index');
});

/* Route::get('/task',function () {
    return view ('tasks');
}); */


Route::get('/task','App\Http\Controllers\taskController@task');
Route::post('/task','App\Http\Controllers\taskController@addTask');
Route::get('/task', 'App\Http\Controllers\taskController@showTask');
Route::get('/task', 'App\Http\Controllers\taskController@showCompletedTask');
Route::get('/task','App\Http\Controllers\taskController@deleteTask');
Route::get('/delete/{id}','App\Http\Controllers\taskController@delete');
Route::get('/edit/{id}','App\Http\Controllers\taskController@edit');
Route::get('/done/{id}','App\Http\Controllers\taskController@done');
Route::post('/update','App\Http\Controllers\taskController@update');


// Authentication Routes
Route::get('/signin', 'App\Http\Controllers\signinController@signin');
Route::get('/register', 'App\Http\Controllers\registerController@register');