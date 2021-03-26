<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profil;
use App\Models\Galeri;

class DetailGaleri extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $galeriId, $data;
    
    public function mount($id)
    {
        $this->data = Galeri::find($id);
    }

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();

        return view('livewire.detail-galeri', [
            'profiless' => $profiless,
        ])->extends('frontend.main');
    }

}
