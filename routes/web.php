<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//   return redirect('https://odama.io');
// });

Route::get('', [App\Http\Controllers\MainController::class, 'happy'])->name('happy');
Route::get('/happy', [App\Http\Controllers\MainController::class, 'happy'])->name('happy');
Route::get('/generate', [App\Http\Controllers\MainController::class, 'happyGenerate'])->name('happyGenerate');
Route::get('/wish', [App\Http\Controllers\MainController::class, 'wish'])->name('wish');
Route::post('/happyAdd', [App\Http\Controllers\MainController::class, 'happyAdd'])->name('happyAdd');