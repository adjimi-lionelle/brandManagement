<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BrandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::apiResource('brands', BrandController::class);

    Route::middleware('cors')->apiResource('brands', BrandController::class);
    Route::middleware('cors')->get('/allBrands', [BrandController::class, 'allBrands'])->name('allBrand');  
