<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstructurasDeControl;


Route::get('/pintores', 'App\Http\Controllers\EstructurasDeControl@index');
Route::get('/rubens', 'App\Http\Controllers\EstructurasDeControl@index2');
Route::get('/velazquez', 'App\Http\Controllers\EstructurasDeControl@index3');
Route::get('/sanzio', 'App\Http\Controllers\EstructurasDeControl@index4');
Route::get('/tiziano', 'App\Http\Controllers\EstructurasDeControl@index5');