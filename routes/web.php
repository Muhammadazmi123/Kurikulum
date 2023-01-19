<?php

use App\Http\Controllers\JadwalPiketController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.dashboard');
});

//route CRUD Jadwal Piket
Route::get('/jadwal_piket', 'JadwalPiketController@jadwal_piket');
Route::post('/jadwal_piket/store', 'JadwalPiketController@store');
Route::get('/jadwal_piket/edit/{id}', 'JadwalPiketController@edit');
Route::post('/jadwal_piket/update', 'JadwalPiketController@update');
Route::get('/jadwal_piket/hapus/{id}', 'JadwalPiketController@hapus');
Route::post('/jadwal_piket/import', 'JadwalPiketController@import');
Route::get('/jadwal_piket/export','JadwalPiketController@export');


//route CRUD Jadwal Pelajaran
Route::get('/jadwal_pelajaran', 'JadwalPelajaranController@jadwal_pelajaran');
Route::post('/jadwal_pelajaran/store', 'JadwalPelajaranController@store');
Route::get('/jadwal_pelajaran/edit/{id}', 'JadwalPelajaranController@edit');
Route::post('/jadwal_pelajaran/update', 'JadwalPelajaranController@update');
Route::get('/jadwal_pelajaran/hapus/{id}', 'JadwalPelajaranController@hapus');
Route::post('/jadwal_pelajaran/import', 'JadwalPelajaranController@import');
Route::get('/jadwal_pelajaran/export', 'JadwalPelajaranController@export');
