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
    return view('welcome１１１１１');
});
Route::any('/getinfo','TestController@getcurl');
Route::any('/sendcode','TestController@sendcode');
Route::any('/login','LoginController@register');
Route::any('/do_register','LoginController@do_register');
Route::any('/login/login','LoginController@login');
Route::any('/login/do_login','LoginController@do_login');
