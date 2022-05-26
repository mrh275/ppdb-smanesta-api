<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\DataPeriodikController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadFilesController;

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
    return view('portal', [
        'title' => 'Portal',
    ]);
})->name('portal');

Route::resource('/register', RegisterController::class)->middleware('auth');
Route::post('/register/upload', [RegisterController::class, 'store']);
Route::middleware(['operator'])->group(function () {
    Route::post('/biodata', [BiodataController::class, 'store']);
    Route::post('/data-orangtua', [DataOrangTuaController::class, 'store']);
    Route::post('/data-periodik', [DataPeriodikController::class, 'store']);
    Route::post('/upload-files', [UploadFilesController::class, 'store']);
});
