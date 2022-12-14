<?php

use App\Http\Controllers\Master\MasterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/master', function () {
    return view('master.master');
})->middleware(['auth'])->name('master');
Route::get('/master/create', function () {
    return view('master.create');
})->middleware(['auth'])->name('master_create');
Route::get('/master/store', [MasterController::class, 'store_dummy'])->middleware('auth');
Route::post('/master/store', [MasterController::class, 'store'])->middleware('auth');

require __DIR__ . '/auth.php';
