<?php

use App\Http\Controllers\authController;
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
Route::get('/registrasi', function () {
    return view('');
});
//Controller
Route::post('/registrasiController', [authController::class, 'registrasi']);
Route::post('/loginController', [authController::class, 'login']);
Route::post('/logoutController', [authController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/txOne', [txController::class, 'getTxOne']);
    Route::get('/txTwo', [txController::class, 'getTxTwo']);

    Route::prefix('tx')->group(function () {
        Route::get('/{tx}/monitoring', [monitoringController::class, 'oneMonitoring']);
        Route::put('/{tx}/monitoring', [monitoringController::class, 'update']);
    });
});
