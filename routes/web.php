<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Profiles;
use App\Http\Livewire\Profiles\Index as Profile;
use App\Http\Livewire\Layanan;
use App\Http\Livewire\Layanan\Index as Layan;
use App\Http\Livewire\Konsultasi;
use App\Http\Livewire\Konsultasi\Index as Konsul;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Gallery\Index as Galeri;
use App\Http\Livewire\Product;
use App\Http\Livewire\Product\Index as Produks;

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
Route::get('layanan', Layan::class);
Route::get('konsultasi', Konsul::class);
Route::get('galeri', Galeri::class);
Route::get('produk', Produks::class);
