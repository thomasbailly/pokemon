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

Route::get('/','FrontController@index')->name("index");

Route::prefix('admin')->group(function () {
    Route::get('accueil',function(){
        return view('back.accueil');
    })->name("admin.accueil");
    
});