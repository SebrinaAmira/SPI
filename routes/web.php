<?php

use App\Http\Livewire\Gallery\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Gallery\Index as Galeri;

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
Route::get('/profil', function () {
    return view('profil.index');
});
Route::get('/profil/create', function () {
    return view('profil.create');
});

Route::resource('profil', ProfilController::class);


Route::get('galeri', Galeri::class);

// Route::get('galeri/edit/{id}',  [GaleriController::class, 'edit']);
// Route::get('galeri/delete/{id}', [GaleriController::class, 'delete']);
