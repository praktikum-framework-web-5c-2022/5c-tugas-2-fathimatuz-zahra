<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MahasiswaController;

//buat data masing2 10

Route::get('/', function(){
    return view('welcome',);
});


Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosenInsert', [DosenController::class, 'insert']);
Route::get('/dosenDelete', [DosenController::class, 'delete']);
Route::get('/dosenUpdate', [DosenController::class, 'update']);


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswaInsert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswaDelete', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswaUpdate', [MahasiswaController::class, 'update']);



Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/matkulInsert', [MatkulController::class, 'insert']);
Route::get('/matkulDelete', [MatkulController::class, 'delete']);
Route::get('/matkulUpdate', [MatkulController::class, 'update']);