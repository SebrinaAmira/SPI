<?php

namespace App\Http\Livewire\Layanan;

use Livewire\Component;
use App\Models\Layanan;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithFileUploads;

    public $judul, $deskripsi, $gambarlama, $gambar, $status, $layanan_id, $isForm;
    public $statusUpdate = false;

    protected $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'required|image|max:1024', // 1MB Max
        'status' => 'required',
    ];

    public function back() 
    {
        redirect('layanan'); 
    }

    public function create() 
    {
        $this->isForm = true;
    }
    
    public function render()
    {
        $lynan = Layanan::all();

        return view('livewire.layanan.index', ['lynan'=>$lynan])
        ->extends('layouts.master');
    }
    
    public function edit($id)
    {
        // return $id;
        $lynan = Layanan::find($id);
        $this->layanan_id = $id;
        $this->judul = $lynan->judul;
        $this->gambarlama = $lynan->gambar;
        $this->deskripsi = $lynan->deskripsi;
        $this->status = $lynan->status;
        $this->layanan_id = $lynan->id;

        $this->isForm = true;
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
        session()->flash('pesan', 'Data Berhasil Dihapus.');
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        if ($this->layanan_id) {
            if ($this->gambar) {
                $lyn = $this->validate();
                $data['updated_by'] = Auth::user()->id;
                $lyn['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $lyn['gambar']);
            } else {
                $lyn = $this->validate([
                    'judul' => 'required',
                    'deskripsi' => 'required',
                    'status' => 'required',
                ]);
                $lyn['updated_by'] = Auth::user()->id;
                $lyn['gambar'] = $this->gambarlama;
            }

            $lynan = Layanan::find($this->layanan_id);
            $lynan->update($lyn);

            $this->isFrom = true;
            
        } else {

            $lyn = $this->validate();
            $lyn['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
            $this->gambar->storeAs('photos', $lyn['gambar']);
            $lyn['created_by'] = Auth::user()->id;
            $lyn['updated_by'] = Auth::user()->id;

            Layanan::create($lyn);
        }

        session()->flash('message', 'Data Berhasil Ditambah.');
        
        $this->reset();
        $this->isFrom = false;
    }

}
