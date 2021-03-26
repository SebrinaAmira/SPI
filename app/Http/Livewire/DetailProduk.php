<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profil;
use App\Models\Produk;

class DetailProduk extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $harga, $produk_id, $data;

    public function mount($id)
    {
        $this->data = Produk::find($id);
    }

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();

        return view('livewire.detail-produk', [
            'profiless' => $profiless,
        ])->extends('frontend.main');
    }

}
