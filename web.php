<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HitungController;
use App\Http\Controllers\tagihController;
use App\Http\Controllers\TugasController;

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
    return view('welcome');
});



Route::get('/pdam', [TugasController::class, 'index'])->name('pdam.index');
Route::post('/pdam/hitung', [TugasController::class, 'hitung'])->name('pdam.hitung');
