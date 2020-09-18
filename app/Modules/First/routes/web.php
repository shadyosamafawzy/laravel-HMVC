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


$moduleName = strtolower(basename(dirname(__DIR__,1)));

Route::namespace(buildNamespace($moduleName))->group(function () use ($moduleName){

    Route::prefix(buildPrefix($moduleName))->namespace('Website')->group(function (){

        Route::get('home', "MainController@index");

    });
});
