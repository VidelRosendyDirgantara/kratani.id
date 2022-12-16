<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', [PerusahaanController::class, 'index'])->name('index');
Route::get('/sayur', [PerusahaanController::class, 'sayur'])->name('sayur');
