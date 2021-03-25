<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profil;
use App\Models\Galeri;

class Detail extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $galeriId;

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();
        $gallerys = Galeri::all();

        return view('livewire.detail', [
            'profiless' => $profiless,
            'gallerys' => $gallerys
        ])->extends('frontend.main');
    }

}
