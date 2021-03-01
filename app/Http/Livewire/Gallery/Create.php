<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Galeri;

use Livewire\Component;


class Create extends Component
{
    

    
   
    
   

    protected $rules = [
        'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024', // 1MB Max
    ];

    

    public function render()
    {
        return view('livewire.gallery.create')
        ->extends('layouts.master');
    }
    
   
}
