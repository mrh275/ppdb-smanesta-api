<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RegisterController;

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
});

Route::resource('/register', RegisterController::class);
Route::post('/register/upload', [RegisterController::class, 'store']);
Route::resource('/biodata', BiodataController::class);
