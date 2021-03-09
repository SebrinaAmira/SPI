<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Produk;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithFileUploads;
    
    public $judul,  $deskripsi,  $gambar,  $gambarlama,  $status, $harga,  $produk_id,  $isForm;
    public $search = '', $paginate = 5;
    public $statusUpdate = false;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
        'harga' => 'required',
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
                $data['updated_by'] = Auth::user()->id;
                $produks['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $produks['gambar']);
            } else {
                $produks = $this->validate([
                    'judul' => 'required',
                    'deskripsi' => 'required',
                    'status' => 'required',
                    'harga' => 'required',
                    ]);
                    $data['updated_by'] = Auth::user()->id;
                    $produks['gambar'] = $this->gambarlama;
                }
                $data['updated_by'] = Auth::user()->id;
                $produksan = Produk::find($this->produk_id);
                $produksan->update($produks);
                
                $this->isFrom = true;
                
            } else {
                // dd(Auth::user()->id);
                $produks = $this->validate();
                $produks['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $produks['gambar']);
                
                $produks['created_by'] = Auth::user()->id;
                $produks['updated_by'] = Auth::user()->id;
                
                Produk::create($produks);
            }

        session()->flash('message', 'Data Berhasil Ditambah.');

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
        $this->harga = $produks->harga;
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
        session()->flash('pesan', 'Data Berhasil Dihapus.');

        redirect('produk');
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

        return view('livewire.product.index', [
            'produks' => $produks,
            'produks' => Produk::where('judul', 'like', '%'.$this->search.'%')->paginate($this->paginate),
            ])->extends('layouts.master');
    }
}
