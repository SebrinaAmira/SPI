<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Produk;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    
    public $judul,  $deskripsi,  $gambar,  $gambarlama,  $status,  $produk_id,  $isForm;
    public $statusUpdate = false;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
        'gambar' => 'required|image|max:1024', // 1MB Max
    ];

    public function back() 
    {
        redirect('produk'); 
    }

    public function create() 
    {
        $this->openForm();
    }

    public function store()
    {
        if ($this->produk_id) {
            if ($this->gambar) {
                $produks = $this->validate();
                $produks['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $produks['gambar']);
            } else {
                $produks = $this->validate([
                    'judul' => 'required',
                    'deskripsi' => 'required',
                    'status' => 'required',
                ]);
                $produks['gambar'] = $this->gambarlama;
            }

            $produksan = Produk::find($this->produk_id);
            $produksan->update($produks);

            $this->isFrom = true;
            
        } else {

            $produks = $this->validate();
            $produks['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
            $this->gambar->storeAs('photos', $produks['gambar']);

            Produk::create($produks);
        }

        $this->reset();
        $this->isFrom = false;
    }

    public function edit($id)
    {
        // return $id;
        $produks = Produk::find($id);
        $this->produk_id = $id;
        $this->judul = $produks->judul;
        $this->gambarlama = $produks->gambar;
        $this->deskripsi = $produks->deskripsi;
        $this->status = $produks->status;
        $this->produk_id = $produks->id;

        $this->openForm();
    }

    public function delete($id)
    {
        $produks = Produk::where('id',$id)->first();
        $this->judul = $produks->judul;

        if($id){
            $produks = Produk::find($id);
            if ($produks->gambar <> "") {
                unlink(public_path('storage/photos/') . '/' . $produks->gambar);
            }

            $produks->delete();
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
        $produks = Produk::all();

        return view('livewire.product.index', ['produks'=>$produks])
            ->extends('layouts.master');
    }
}
