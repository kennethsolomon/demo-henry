<?php

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

Route::get('/dashboard', function () { return view('welcome'); }); // facebook.com

Route::get('/', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/create', [App\Http\Controllers\TestController::class, 'create']);
Route::get('/update', [App\Http\Controllers\TestController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\TestController::class, 'delete']);
