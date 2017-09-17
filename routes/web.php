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

Route::get('/', function () { 
    return view('shop.index');
});

Route::get('add_news', function () { 
    return view('shop.add_news');
 });

Route::get('master', function () { 
    return view('shop.index');
});


Route::post("padeka", "NaujasKlientas@index");


