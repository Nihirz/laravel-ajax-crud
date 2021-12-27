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
    return view('welcome');
});

Route::get('home','StudentController@index');
Route::post('form_action','StudentController@store')->name('student.store');
Route::get('student/{id}/edit', 'StudentController@edit')->name('student.edit');
Route::post('student/update', 'StudentController@update')->name('student.update');
Route::get('student/{id}/delete', 'StudentController@destroy')->name('student.delete');

