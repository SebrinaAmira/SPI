<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Index as Root;    
use App\Http\Livewire\DetailGaleri;
use App\Http\Livewire\DetailProduk;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profiles\Index as Profile;
use App\Http\Livewire\Layanan\Index as Layan;
use App\Http\Livewire\Konsultasi\Index as Konsul;
use App\Http\Livewire\Gallery\Index as Galeri;
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

Route::get('/', Root::class)->middleware('guest');
Route::get('detail/galeri/{id}', DetailGaleri::class);
Route::get('detail/produk/{id}', DetailProduk::class);

Auth::routes(['register'=> false, 'reset'=>false]);
Route::middleware(['auth'])->group(function () {
    Route::get('home', Dashboard::class);
    Route::get('dashboard', Dashboard::class);
    Route::get('profil', Profile::class);
    Route::get('layanan', Layan::class);
    Route::get('konsultasi', Konsul::class);
    Route::get('galeri', Galeri::class);
    Route::get('produk', Produks::class);
});
