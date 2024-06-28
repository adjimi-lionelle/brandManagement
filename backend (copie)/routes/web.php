<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;

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


Route::get('', [AuthController::class, 'Formlogin'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit'); 

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('brand', BrandController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
