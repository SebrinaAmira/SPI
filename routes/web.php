<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire;

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
    return view('layouts.master');
});
Route::get('/profil', function () {
    return view('profil.index');
});
Route::get('/profil/create', function () {
    return view('profil.create');
});

Route::resource('profil', ProfilController::class); 


Route::get('profil', App\Http\Livewire\Profil::class);
Route::get('profil', function() {
    return view('livewire');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('galeri/create', [GaleriController::class, 'add']);
Route::post('galeri/update/{id}', [GaleriController::class, 'update']);
Route::get('galeri/edit/{id}',  [GaleriController::class, 'edit']);
Route::post('galeri/insert', [GaleriController::class, 'insert']);
Route::get('galeri/delete/{id}', [GaleriController::class, 'delete']);
