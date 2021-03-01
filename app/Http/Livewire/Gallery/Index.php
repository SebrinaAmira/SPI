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

    public $judul;
    public $deskripsi;
    public $gambar;
    public $gambarlama;
    public $status;
    public $galeriId;
    public $isFrom;

    protected $rules = [
        'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024', // 1MB Max
    ];

    public function back()
    {
        redirect('galeri');
    }

    public function create()
    {
        $this->openForm();
    }

    public function openForm()
    {
        $this->isFrom=true;
    }

    public function closeForm()
    {
        $this->isFrom=false;
    }

    public function render()
    {
        $gallerys = Galeri::all();

        return view('livewire.gallery.index',['gallerys'=>$gallerys])
        ->extends('layouts.master');
    }

    public function getGaleri($id)
    {
        $this->statusUpdate = true;
        $gallerys = Galeri::find($id);
        $this->emit('getGaleri', $gallerys);
    }

    public function edit($id)
    {
        $data = Galeri::find($id);
        $this->judul = $data->judul;
        $this->gambar = $data->gambar;
        $this->status = $data->status;
        $this->deskripsi = $data->deskripsi;
        
        $this->openForm();
    }

    public function update()
    {
        $data = $this->validate();
            
        $data['image'] = $this->gambarlama;
            if ($this->gambar) {
                $data = $this->validate([
                'gambar' => 'gambar|max:1024'
                ]);

                    $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
            $this->gambar->storeAs('photos', $data['gambar']);

            }


        
        if ($this->galeriId) {
            $galeri = Galeri::find($this->galeriId);
            $galeri->update([
                'judul' => $this->judul,
                'deskripsi' => $this->deskripsi,
                'status' => $this->status,
                'gambar' => $data['gambar'],
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            

            $this->openForm();
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Galeri::find($id);
            if ($data->gambar <> ""){
                unlink(public_path('storage/photos/').'/'.$data->gambar);
            }
            
            $data -> delete();
            session()->flash('message', 'Contact was deleted!' );
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $data = $this->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024', // 1MB Max
        ]);

        
        $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
        $this->gambar->storeAs('photos', $data['gambar']);
        

        Galeri::updateOrCreate([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
            'gambar' => $data['gambar'],
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
        
        $this->reset();
        $this->closeForm();
    }

    public function showGaleri($galeri)
    {
        $this->judul = $galeri['name'];
        $this->deskripsi = $galeri['phone'];
        $this->gambar = $galeri['gambar'];
        $this->status = $galeri['status'];
    }

    private function resetInput()
    {
        $this->judul = null;
        $this->gambar = null;
        $this->status = null;
        $this->deskripsi = null;
    }

}
