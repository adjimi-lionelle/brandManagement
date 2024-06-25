<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;

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
    return view('welcome');
});

/*Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('brand', BrandController::class);
});*/
