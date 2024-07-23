<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AsalSekolahController;
use App\Http\Controllers\UploadFilesController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\DataPeriodikController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/data-pendaftar', [BiodataController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/active-pendaftar/{id}', [BiodataController::class, 'edit']);
    Route::post('/biodata', [BiodataController::class, 'store']);
    Route::post('/data-orangtua', [DataOrangTuaController::class, 'store']);
    Route::post('/data-periodik', [DataPeriodikController::class, 'store']);
    Route::get('/asal-sekolah/{noreg_ppdb}', [AsalSekolahController::class, 'edit']);
    Route::post('/upload-files', [UploadFilesController::class, 'uploadFiles']);
    Route::post('/upload-files/ijazah', [UploadFilesController::class, 'uploadIjazah']);
    Route::post('/upload-files/kk', [UploadFilesController::class, 'uploadKK']);
    Route::post('/upload-files/akte', [UploadFilesController::class, 'uploadAkte']);
    Route::post('/upload-files/ktp', [UploadFilesController::class, 'uploadKTP']);
    Route::post('/upload-files/kip', [UploadFilesController::class, 'uploadKIP']);
    Route::post('/upload-files/kis', [UploadFilesController::class, 'uploadKIS']);
    Route::post('/upload-files/kks', [UploadFilesController::class, 'uploadKKS']);
    Route::post('/upload-files/pkh', [UploadFilesController::class, 'uploadPKH']);
});
