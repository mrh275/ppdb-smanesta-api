<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UploadFilesController;
use App\Http\Controllers\Admin\AcceptController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\DataPeriodikController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Models\Biodata;

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

// Route::get('/data-pendaftar', [PortalController::class, 'showRegister'])->name('data-pendaftar');

// Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route::post('/register/upload', [RegisterController::class, 'store']);
// Route::middleware(['checkRole'])->group(function () {
//     Route::get('/register', [RegisterController::class, 'index']);
//     Route::post('/biodata', [BiodataController::class, 'store']);
//     Route::post('/data-orangtua', [DataOrangTuaController::class, 'store']);
//     Route::post('/data-periodik', [DataPeriodikController::class, 'store']);
//     Route::post('/upload-files', [UploadFilesController::class, 'uploadFiles']);
//     Route::post('/upload-files/ijazah', [UploadFilesController::class, 'uploadIjazah']);
//     Route::post('/upload-files/kk', [UploadFilesController::class, 'uploadKK']);
//     Route::post('/upload-files/akte', [UploadFilesController::class, 'uploadAkte']);
//     Route::post('/upload-files/ktp', [UploadFilesController::class, 'uploadKTP']);
//     Route::post('/upload-files/kip', [UploadFilesController::class, 'uploadKIP']);
//     Route::post('/upload-files/kis', [UploadFilesController::class, 'uploadKIS']);
//     Route::post('/upload-files/kks', [UploadFilesController::class, 'uploadKKS']);
//     Route::post('/upload-files/pkh', [UploadFilesController::class, 'uploadPKH']);
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Admin Panel
Route::middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/admin/data-pendaftar', [AdminController::class, 'dataPendaftar']);
    Route::get('/admin/data-pendaftar/edit/{id}', [BiodataController::class, 'edit']);
    Route::post('/admin/verifikasi/{id}', [VerifikasiController::class, 'update']);
});

// Register Route
Route::middleware(['auth', 'adminRole'])->group(function () {
    Route::get('/admin/seleksi-pendaftar', [AdminController::class, 'seleksiPendaftar']);
    Route::get('/admin/hasil-seleksi', [AdminController::class, 'hasilSeleksi']);
    Route::post('/admin/accept/{id}', [AcceptController::class, 'update']);
    // Route::post('/biodata/edit', [BiodataController::class, 'edit']);
    // Route::post('/data-orang-tua/edit', [DataOrangTuaController::class, 'edit']);
    // Route::post('/data-periodik/edit', [DataPeriodikController::class, 'edit']);
});
