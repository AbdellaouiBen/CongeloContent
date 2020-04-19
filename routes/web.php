<?php

use Illuminate\Support\Facades\Route;
use App\Pa;
use App\Ka;
use App\Ma;
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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('ka', 'KaController');
Route::resource('ma', 'MaController');
Route::resource('pa', 'PaController');