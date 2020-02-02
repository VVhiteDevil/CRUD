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

// use Symfony\Component\Routing\Route;

Route::get('/', 'TasksController@index')->name('tasks.index');

Route::get('/create', 'TasksController@create')->name('tasks.create');

Route::post('/store', 'TasksController@store')->name('tasks.store');

Route::get('/{id}/edit', 'TasksController@edit')->name('tasks.edit');

Route::put('/{id}/update', 'TasksController@update')->name('tasks.update');

Route::get('/{id}/show', 'TasksController@show')->name('tasks.show');

Route::delete('/{id}/destroy', 'TasksController@destroy')->name('tasks.destroy');

