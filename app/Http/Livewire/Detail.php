<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;

class Detail extends Component
{
    public $judul, $deskripsi, $gambar, $gambarlama, $status, $galeriId;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
        'gambar' => 'required|image|max:1024', // 1MB Max
    ];

    public function render()
    {
        $gallerys = Galeri::all();

        return view('livewire.detail', ['gallerys' => $gallerys,])
        ->extends('frontend.main');
    }

    
}
