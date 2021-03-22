<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;
use App\Models\Konsultasi;
use App\Models\Layanan;
use App\Models\Produk;
use App\Models\Profiles;

class Dashboard extends Component
{
    public function render()
    {
        $knsultasi = Konsultasi::get()->count();
        $gallerys = Galeri::get()->count();
        $lynan = Layanan::get()->count();
        $produks = Produk::get()->count();

        return view('livewire.dashboard', [
            'knsultasi' => $knsultasi,
            'gallerys' => $gallerys,
            'lynan' => $lynan,
            'produks' => $produks
        ])->extends('layouts.master');
    }
}
