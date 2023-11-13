<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DewanAmbalanController;
use App\Http\Controllers\PilihPradanaController;
use App\Http\Controllers\PilihPradaniConrtroller;
use App\Http\Controllers\Pradana;
use App\Http\Controllers\PradanaController;
use App\Http\Controllers\PradaniController;
use App\Http\Controllers\Riwayat_pradaniController;
use App\Http\Controllers\RiwayatController;
use App\Models\Riwayat_pradani;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('do_login', 'do_login')->name('do_login');

    Route::get('/', 'logindewan')->name('logindewan');
    Route::post('do_logindewanambalan', 'do_logindewanambalan')->name('do_logindewanambalan');
    Route::post('logout', 'logout')->name('logout');
    Route::post('logout_dewan', 'logout_dewan')->name('logout_dewan');
});


Route::middleware(['admin'])->group(function () {
    Route::resource('pilpra', PradanaController::class);
    Route::resource('dewanambalan', DewanAmbalanController::class);
    Route::resource('pradani', PradaniController::class);
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('riwayat_pradani', Riwayat_pradaniController::class);
    Route::get('/hasil', [RiwayatController::class, 'hasil'])->name ('hasil');
});


Route::resource('pilihpradana', PilihPradanaController::class)->middleware('dewanambalan');

Route::resource('pilihpradani', PilihPradaniConrtroller::class)->middleware('dewanambalan');
