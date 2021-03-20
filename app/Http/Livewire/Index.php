<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;
use App\Models\Konsultasi;
use App\Models\Layanan;
use App\Models\Produk;
use App\Models\Profiles;

class Index extends Component
{
    public $nama, $telepon, $alamat, $pesan, $status, $created_by, $updated_by, $konsultasi_id;

    protected $rules = [
        'nama' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'pesan' => 'required',
    ];

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
        ])->extends('frontend.master');
    }

    public function store()
    {
        // return ('aaaaa');
        $this->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'pesan' => 'required',
            // 'status' => 'required',
        ]);
        // dd($knsultasi);

        Konsultasi::create([
            'nama' => $this->nama,
            'telepon' => 'https://wa.me/' . $this->telepon,
            'alamat' => $this->alamat,
            'pesan' => $this->pesan,
            'status' => 'Show',
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        $this->reset();
    }
}
