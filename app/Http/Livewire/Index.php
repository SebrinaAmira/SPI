<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Galeri;
use App\Models\Konsultasi;
use App\Models\Layanan;
use App\Models\Produk;
use App\Models\Profiles;

class Index extends Component
{
    public function render()
    {
        $knsultasi = Konsultasi::all();
        $gallerys = Galeri::all();
        $lynan = Layanan::all();
        $produks = Produk::all();

        return view('livewire.index', [
            'knsultasi' => $knsultasi,
            'gallerys' => $gallerys,
            'lynan' => $lynan,
            'produks' => $produks
        ]);
    }
}
