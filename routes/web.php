<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::get('/', 'App\Http\Controllers\CategorieController@index');

Route::get('/show', 'App\Http\Controllers\CategorieController@getCategories');

Route::post('/save', 'App\Http\Controllers\CategorieController@save');

Route::post('/delete', 'App\Http\Controllers\CategorieController@delete');

Route::post('/update', 'App\Http\Controllers\CategorieController@update');
