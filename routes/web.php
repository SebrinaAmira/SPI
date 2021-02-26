<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Profiles\Index as Profile;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('layouts.master');
});

Route::get('profil', Profile::class);


Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('galeri/create', [GaleriController::class, 'add']);
Route::post('galeri/update/{id}', [GaleriController::class, 'update']);
Route::get('galeri/edit/{id}',  [GaleriController::class, 'edit']);
Route::post('galeri/insert', [GaleriController::class, 'insert']);
Route::get('galeri/delete/{id}', [GaleriController::class, 'delete']);
