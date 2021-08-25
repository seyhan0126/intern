<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

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
//
Route::get('/cv',[CVController::class,'index'])->name('cv.index');
Route::get('/cv/create',[CVController::class, 'create'])->name('cv.create');
Route::get('cv/{cv}', [CVController::class, 'edit'])->name('cv.edit');
Route::put('/cv/{cv}',[CVController::class, 'update'])->name('cv.update');
Route::get('cv/{cv}/show',[CVController::class, 'show'])->name('cv.show');
Route::post('/cv/store', [CVController::class, 'store'])->name('cv.store');
Route::delete('/cv/{cv}/delete', [CVController::class, 'destroy'])->name('cv.delete');
