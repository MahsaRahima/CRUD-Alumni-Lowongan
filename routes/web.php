<?php

use App\Http\Controllers\LogangController;
use App\Http\Controllers\LokerController;
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
    return view('lowongan');
})->name('welcome');


//route Loker
Route::get('/loker',[LokerController::class, 'index'])->name('listings.index');
Route::get('/postLoker',[LokerController::class,'create']);
Route::post('/storeloker',[LokerController::class, 'store']);
Route::get('/loker/{id}', [LokerController::class,'show']);
Route::get('/loker/{id}/edit', [LokerController::class,'edit']);
Route::put('/loker/{id}/update', [LokerController::class,'update']);
Route::delete('/loker/{id}/delete', [LokerController::class,'destroy']);
Route::get('/manageLoker', [LokerController::class,'manage'])->name('manage.view');

//route Logang
Route::get('/logang', [LogangController::class, 'index'])->name('listingmagang.index');
Route::get('/postLogang',[LogangController::class,'create']);
Route::post('/storelogang',[LogangController::class, 'store']);
Route::get('/logang/{id}', [LogangController::class,'show']);
Route::get('/logang/{id}/edit', [LogangController::class,'edit']);
Route::put('/logang/{id}/update', [LogangController::class,'update']);
Route::delete('/logang/{id}/delete', [LogangController::class,'destroy']);
Route::get('/manageLogang', [LogangController::class,'manage'])->name('manageLogang.view');