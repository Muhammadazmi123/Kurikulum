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
Route::post('/agenda/store', 'AgendaController@store');
Route::get('/agenda/edit/{id}', 'AgendaController@edit');
Route::post('/agenda/update', 'AgendaController@update');
Route::get('/agenda/hapus/{id}', 'AgendaController@hapus');


//route CRUD Kehadiran
Route::get('/jadwal/kelas-10', 'JadwalKelas10Controller@jadwal');
Route::post('/jadwal/store', 'JadwalKelas10Controller@store');
Route::get('/jadwal/edit/{id}', 'JadwalKelas10Controller@edit');
Route::post('/jadwal/update', 'JadwalKelas10Controller@update');
Route::get('/jadwal/hapus/{id}', 'JadwalKelas10Controller@hapus');

//route CRUD Kehadiran
// Route::get('/kehadiran/kelas-12/tkj', 'Kehadiran12TKJController@kehadiran');
// Route::post('/kehadiran/store', 'Kehadiran12TKJController@store');
// Route::get('/kehadiran/edit/{id}', 'Kehadiran12TKJController@edit');
// Route::post('/kehadiran/update', 'Kehadiran12TKJController@update');
// Route::get('/kehadiran/hapus/{id}', 'Kehadiran12TKJController@hapus');
