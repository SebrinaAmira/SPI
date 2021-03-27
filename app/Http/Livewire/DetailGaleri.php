<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profil;
use App\Models\Galeri;

class DetailGaleri extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $galeriId, $data, $cek;
    
    public function mount($id)
    {
        $cek = Galeri::find($id);
        // dd($cek);

        if ($cek != null) {
            $this->data = Galeri::find($id);
        }
    }

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();

        if (empty($this->data)) {
            // return 'kosong';
            $this->redirect('/notFound');
        }

        return view('livewire.detail-galeri', [
            'profiless' => $profiless,
        ])->extends('frontend.main');
    }

}
