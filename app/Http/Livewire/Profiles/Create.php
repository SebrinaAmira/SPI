<?php

namespace App\Http\Livewire\Profiles;

use Livewire\Component;
use App\Models\Profil;

class Create extends Component
{
    public $alamat, $fb, $instagram, $telepon, $deskripsi_konten, $status;

    protected $rules = [
        'alamat' => 'required',
        'fb' => 'required',
        'instagram' => 'required',
        'telepon' => 'required',
        'deskripsi_konten' => 'required',
        'status' => 'required',
    ];

    public function render()
    {
        return view('livewire.profiles.create')
            ->extends('layouts.master');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $profiless = $this->validate([
            'alamat' => 'required',
            'fb' => 'required',
            'instagram' => 'required',
            'telepon' => 'required',
            'deskripsi_konten' => 'required',
            'status' => 'required',
        ]);

        Profil::create([
            'alamat' => $this->alamat,
            'fb' => $this->fb,
            'instagram' => $this->instagram,
            'telepon' => $this->telepon,
            'deskripsi_konten' => $this->deskripsi_konten,
            'status' => $this->status,
        ]);
        
        $this->reset();
        
        $this->emit('profileStored', $profiless);
    }

    
}
