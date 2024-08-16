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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hitung',[App\HTTP\Controllers\LatihanController::class, 'penjumlahan']);

Route::get('/formhitung',[App\HTTP\Controllers\LatihanController::class, 'formhitung']);
Route::post('/formhitung',[App\HTTP\Controllers\LatihanController::class, 'formhitung_post']);

//siaka
Route::get('/mahasiswa',[App\HTTP\Controllers\MahasiswaController::class, 'view']);

Route::get('/mahasiswa/create',[App\HTTP\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa/create',[App\HTTP\Controllers\MahasiswaController::class, 'store']);

Route::get('/mahasiswa/{nim}/edit',[App\HTTP\Controllers\MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/edit',[App\HTTP\Controllers\MahasiswaController::class, 'update']);
    
Route::get('/mahasiswa/{nim}/delete',[App\HTTP\Controllers\MahasiswaController::class, 'destroy']);