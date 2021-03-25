<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;
use App\Models\Konsultasi;
use App\Models\Layanan;
use App\Models\Produk;
use App\Models\Profil;

class Index extends Component
{
    public $nama, $telepon, $alamat, $pesan, $status, $created_by, $updated_by, $konsultasi_id;

    protected $rules = [
        'nama' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'pesan' => 'required',
    ];

    public function mount()
    {
        $this->nama = '';
        $this->telepon = '';
        $this->pesan = '';
        $this->alamat = '';
    }

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();
        $knsultasi = Konsultasi::all();
        $gallerys = Galeri::all();
        $lynan = Layanan::all();
        $produks = Produk::all();

        // dd($profiless);

        return view('livewire.index', [
            'profiless' => $profiless,
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
        ]);
        // dd($knsultasi);

        Konsultasi::create([
            'nama' => $this->nama,
            'telepon' => 'https://wa.me/+62'.$this->telepon,
            'alamat' => $this->alamat,
            'pesan' => $this->pesan,
            'status' => 'Diproses',
            'created_by' => 100,
            'updated_by' => 100,
        ]);

        session()->flash('message', 'Data Berhasil Dikirim.');

        $this->reset();
    }

    // public function tampil($id)
    // {
    //     $knsultasi = Konsultasi::find($id);
    //     $this->konsultasi_id = $id;
    // }

}
