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

Route::get('/', "AddController@index") -> name('home');
Route::get('/add-client', 'AddController@create') -> name('add-client');
Route::post('/add-client', 'AddController@client') -> name('added');
Route::get('/edit-client/{id}', 'AddController@edit') -> name('edit-client');
Route::put('/update-client/{id}', 'AddController@update') -> name('update-data');
Route::delete('/delete-client/{id}', 'AddController@delete') -> name('delete-client');
