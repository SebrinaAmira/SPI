<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;

class Detail extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $galeriId;

    public function render()
    {
        $gallerys = Galeri::all();

        return view('livewire.detail', [
            'gallerys' => $gallerys
        ])->extends('frontend.main');
    }

}
