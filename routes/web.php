<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PhotoController;

Route::get('photo', [PhotoController::class, 'getPhoto']);
Route::post('photo', [PhotoController::class, 'postPhoto']);
Route::get('/', ['uses'=>'App\Http\Controllers\WelcomeController@index', 'as'=>'home']);
Route::get('article/{n}', 'App\Http\Controllers\ArticleController@show')->where('n','[0-9]+');
Route::get('infos/', 'App\Http\Controllers\InfosController@getInfos');
Route::post('infos/', 'App\Http\Controllers\InfosController@postInfos');
Route::get('facture/{n}', 'App\Http\Controllers\FactureController@show')->where('n','[0-9]+');
Route::get('contact', 'App\Http\Controllers\ContactController@getForm');
Route::post('contact', 'App\Http\Controllers\ContactController@postForm');
