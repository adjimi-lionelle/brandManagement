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
    //Route::resource('brand', BrandController::class);
    Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');           
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');  
    Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');          
    Route::get('/brand/{id}', [BrandController::class, 'show'])->name('brand.show');        
    Route::get('/brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');   
    Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');    
    Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy'); 

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
