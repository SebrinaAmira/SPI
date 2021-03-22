<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Index;
use App\Http\Livewire\Detail;
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

Route::get('/index', function () {
    return view('welcome');
})->middleware('guest');

Route::get('index', Index::class);
Route::get('detail', Detail::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('dashboard', Dashboard::class)->middleware('auth');
Route::get('profil', Profile::class)->middleware('auth');
Route::get('layanan', Layan::class)->middleware('auth');
Route::get('konsultasi', Konsul::class)->middleware('auth');
Route::get('galeri', Galeri::class)->middleware('auth');
Route::get('produk', Produks::class)->middleware('auth');
