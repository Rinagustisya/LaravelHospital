<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\GoldarahController;
use App\Http\Controllers\JenisKelaminController;
use App\Models\pasien;

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

Route::get('/home', function () {
    return view('home');
});

Route::group(["prefix" => "/pasien"], function () {
    Route::get('/all', [PasienController::class, 'index']);
    Route::get('/detail/{pasien}', [PasienController::class, 'show']);
    Route::post('/add', [PasienController::class, 'store']); 
    Route::get('/create', [PasienController::class, 'create']);
    Route::get('/edit/{pasien}', [PasienController::class, 'edit']);
    Route::post('/update/{pasien}', [PasienController::class, 'update']);
    Route::delete('/delete/{pasien}', [PasienController::class, 'destroy']);
});

Route::group(["prefix" => "/dokter"], function () {
    Route::get('/all', [DokterController::class, 'index']);
    Route::get('/detail/{dokter}', [DokterController::class, 'show']);
});

Route::group(["prefix" => "/kamar"], function () {
    Route::get('/all', [KamarController::class, 'index']);
    Route::get('/detail/{kamar}', [KamarController::class, 'show']);
});

Route::group(["prefix" => "/goldarah"], function () {
    Route::get('/all', [GoldarahController::class, 'index']);
    Route::get('/detail/{goldarah}', [GoldarahController::class, 'show']);
});

Route::group(["prefix" => "/jeniskelamin"], function () {
    Route::get('/all', [JenisKelaminController::class, 'index']);
    Route::get('/detail/{jenisKelamin}', [JenisKelaminController::class, 'show']);
});