<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DataOrangTuaController;

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

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/data-pendaftar', [BiodataController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/active-pendaftar', [BiodataController::class, 'edit']);
    Route::post('/biodata', [BiodataController::class, 'store']);
    Route::post('/data-orangtua', [DataOrangTuaController::class, 'store']);
});
