<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\monitoringController;
use App\Http\Controllers\txController;
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
    return view('login');
})->name('login')->middleware('guest'); //login first page acces

Route::get('/register', function () {
    return view('register');
});

Route::get('/choose', function () {
    return view('choose');
})->name('choose');

//Controller
Route::post('/create', [authController::class, 'registrasi']);
Route::post('/login', [authController::class, 'login']);
Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/txOne', [txController::class, 'getTxOne'])->name('tx-1');
    Route::get('/txTwo', [txController::class, 'getTxTwo'])->name('tx-2');
    Route::post('/processtx', [txController::class, 'processTx']);

    Route::prefix('tx')->group(function () {
        Route::get('/{tx}/monitoring', [monitoringController::class, 'edit'])->name('edit');
        Route::put('/{tx}/monitoring', [monitoringController::class, 'update'])->name('update');
    });
});
