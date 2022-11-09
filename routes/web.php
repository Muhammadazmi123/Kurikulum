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

Route::get('dashboard', function () {
    return view('layouts.dashboard');
});

//route CRUD AGENDA
Route::get('/agenda', 'AgendaController@agenda');
Route::get('/agenda/tambah', 'AgendaController@tambah');
Route::post('/agenda/store', 'AgendaController@store');
Route::get('/agenda/edit/{id}', 'AgendaController@edit');
Route::post('/agenda/update', 'AgendaController@update');
Route::get('/agenda/hapus/{id}', 'AgendaController@hapus');
