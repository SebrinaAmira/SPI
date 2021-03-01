<?php

namespace App\Http\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;

class Index extends Component
{
    public $judul, $deskripsi, $gambar, $status, $layanan_id, $isForm;
    public $statusUpdate = false;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'required',
        'status' => 'required',
    ];

    public function back() 
    {
        redirect('layanan'); 
    }

    public function create() 
    {
        $this->openForm();
    }

    public function store()
    {
        $lynan = $this->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'status' => 'required',
        ]);

        Layanan::updateOrCreate(['id' => $this->layanan_id], [
            'judul' => $this->judul,
            'gambar' => $this->gambar,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
        ]);
        
        $this->reset();
        $this->closeForm();
    }

    public function edit($id)
    {
        // return $id;
        $lynan = Layanan::find($id);
        $this->layanan_id = $id;
        $this->judul = $lynan->judul;
        $this->fb = $lynan->fb;
        $this->deskripsi = $lynan->deskripsi;
        $this->status = $lynan->status;

        $this->openForm();
    }

    public function delete($id)
    {
        $lynan = Layanan::where('id',$id)->first();
        $this->judul = $lynan->judul;

        if($id){
            Layanan::where('id',$id)->delete();
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
        $lynan = Layanan::all();

        return view('livewire.layanan.index', ['lynan'=>$lynan])
            ->extends('layouts.master');
    }
}
