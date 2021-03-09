<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Galeri;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithFileUploads;

    public $statusUpdate = false;
    public $judul,  $deskripsi,  $gambar,  $gambarlama,  $status,  $galeriId,  $isFrom;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
        'gambar' => 'required|image|max:1024', // 1MB Max
    ];

    public function back()
    {
        redirect('galeri');
    }

    public function create()
    {
        $this->isFrom = true;
    }

    public function render()
    {
        $gallerys = Galeri::all();

        return view('livewire.gallery.index', ['gallerys' => $gallerys])
            ->extends('layouts.master');
    }

    public function edit($id)
    {
        $data = Galeri::find($id);
        $this->judul = $data->judul;
        $this->gambarlama = $data->gambar;
        $this->status = $data->status;
        $this->deskripsi = $data->deskripsi;
        $this->galeriId = $data->id;
        $this->isFrom = true;
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Galeri::find($id);
            if ($data->gambar <> "") {
                unlink(public_path('storage/photos/') . '/' . $data->gambar);
            }

            $data->delete();
        }
        session()->flash('pesan', 'Data Berhasil Dihapus.');

        redirect('galeri');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        if ($this->galeriId) {
            if ($this->gambar) {
                $data = $this->validate();
                $data['updated_by'] = Auth::user()->id;
                $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $data['gambar']);
            } else {
                $data = $this->validate([
                    'judul' => 'required',
                    'deskripsi' => 'required',
                    'status' => 'required',
                ]);
                $data['updated_by'] = Auth::user()->id;
                $data['gambar'] = $this->gambarlama;
            }

            $galeri = Galeri::find($this->galeriId);
            $galeri->update($data);

            $this->isFrom = true;
            
        } else {

            $data = $this->validate();
            $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
            $this->gambar->storeAs('photos', $data['gambar']);
            $data['created_by'] = Auth::user()->id;
            $data['updated_by'] = Auth::user()->id;

            Galeri::create($data);
        }

        session()->flash('message', 'Data Berhasil Ditambah.');

        $this->reset();
        $this->isFrom = false;
    }

    private function resetInput()
    {
        $this->judul = null;
        $this->gambar = null;
        $this->status = null;
        $this->deskripsi = null;
    }
}
