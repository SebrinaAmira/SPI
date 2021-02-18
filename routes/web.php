<?php

use App\Http\Controllers\GaleriController;
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
    return view('layout.master');
});

Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('galeri/create', [GaleriController::class, 'add']);
Route::post('galeri/update/{id}', [GaleriController::class, 'update']);
Route::get('galeri/edit/{id}',  [GaleriController::class, 'edit']);
Route::post('galeri/insert', [GaleriController::class, 'insert']);
Route::get('galeri/delete/{id}', [GaleriController::class, 'delete']);
