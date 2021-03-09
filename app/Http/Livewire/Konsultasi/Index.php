<?php

namespace App\Http\Livewire\Konsultasi;

use Livewire\Component;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $nama, $telepon, $alamat, $pesan, $status, $konsultasi_id, $isForm, $created_by, $updated_by;
    public $statusUpdate = false;

    protected $rules = [
        'nama' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'pesan' => 'required',
        'status' => 'required',
    ];

    public function back() 
    {
        redirect('konsultasi'); 
    }

    public function create() 
    {
        $this->openForm();
    }

    public function store()
    {
        $knsultasi = $this->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'pesan' => 'required',
            'status' => 'required',
        ]);

        Konsultasi::updateOrCreate(['id' => $this->konsultasi_id], [
            'nama' => $this->nama,
            'telepon' => 'https://wa.me/c/'.$this->telepon,
            'alamat' => $this->alamat,
            'pesan' => $this->pesan,
            'status' => $this->status,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
        
        $this->reset();
        $this->closeForm();
    }

    public function edit($id)
    {
        // return $id;
        $knsultasi = Konsultasi::find($id);
        $this->konsultasi_id = $id;
        $this->nama = $knsultasi->nama;
        $this->telepon = $knsultasi->telepon;
        $this->alamat = $knsultasi->alamat;
        $this->pesan = $knsultasi->pesan;
        $this->status = $knsultasi->status;

        $this->openForm();
    }

    public function delete($id)
    {
        $knsultasi = Konsultasi::where('id',$id)->first();
        $this->nama = $knsultasi->nama;

        if($id){
            Konsultasi::where('id',$id)->delete();
        }
    }

    public function openForm()
    {
        $this->isForm = true;
    }

    public function closeForm()
    {
        $this->isForm = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $knsultasi = Konsultasi::all();

        return view('livewire.konsultasi.index', ['knsultasi'=>$knsultasi])
            ->extends('layouts.master');
    }
}
