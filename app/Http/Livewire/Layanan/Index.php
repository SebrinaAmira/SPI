<?php

namespace App\Http\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $judul, $deskripsi, $gambar, $status, $layanan_id, $isForm;
    public $statusUpdate = false;

    protected $rules = [
        'judul' => 'required',
        'gambar' => 'required',
        'status' => 'required',
        'deskripsi' => 'required',
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
            'gambar' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($this->layanan_id) {

            if ($this->gambar) {
                $lynan['image'] = $this->gambar;
                $lynan = $this->validate([
                    'gambar' => 'image|max:1024'
                ]);

                $lynan['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $lynan['gambar']);
            }

            $lynan = Layanan::find($this->layanan_id);
            $lynan->update([
                'judul' => $this->judul,
                'gambar' => $lynan['gambar'],
                'deskripsi' => $this->deskripsi,
                'status' => $this->status,
            ]);

        Layanan::updateOrCreate(['id' => $this->layanan_id], [
            'judul' => $this->judul,
            'gambar' => $this->gambar,
            'status' => $this->status,
            'deskripsi' => $this->deskripsi,
        ]);
        
        $this->openForm();

        } else {

            if ($lynan['gambar']) {
                $lynan['gambar'] = md5($this->gambar . microtime()) . '.' . $lynan['gambar']->extension();
                $this->gambar->storeAs('photos', $lynan['gambar']);
            }


            Layanan::updateOrCreate(['id' => $this->layanan_id], [
                'judul' => $this->judul,
                'gambar' => $lynan['gambar'],
                'status' => $this->status,
                'deskripsi' => $this->deskripsi,
            ]);
        }
        
        $this->reset();
        $this->closeForm();
    }

    public function edit($id)
    {
        // return $id;
        $lynan = Layanan::find($id);
        $this->layanan_id = $id;
        $this->judul = $lynan->judul;
        $this->gambar = $lynan->gambar;
        $this->deskripsi = $lynan->deskripsi;
        $this->status = $lynan->status;

        $this->openForm();
    }

    public function update()
    {
        $lynan = $this->validate();

        if ($this->gambar) {
            $lynan['image'] = $this->gambarlama;
            $lynan = $this->validate([
                'gambar' => 'gambar|max:1024'
            ]);

            $lynan['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
            $this->gambar->storeAs('photos', $lynan['gambar']);
        }

        if ($this->layanan_id) {
            $lynan = Layanan::find($this->layanan_id);
            $lynan->update([
                'judul' => $this->judul,
                'gambar' => $lynan['gambar'],
                'status' => $this->status,
                'deskripsi' => $this->deskripsi,
            ]);

        }

            $this->openForm();
    }

    public function delete($id)
    {
        $lynan = Layanan::where('id',$id)->first();
        $this->judul = $lynan->judul;

        if($id){
            $lynan = Layanan::find($id);
            if ($lynan->gambar <> "") {
                unlink(public_path('storage/photos/') . '/' . $lynan->gambar);
            }

            $lynan->delete();
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
