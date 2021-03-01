<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Galeri;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $judul;
    public $gambar;
    public $deskripsi;
    public $gambarlama;
    public $galeriId;
    public $isFrom;

    protected $listeners = [
        'getGaleri' => 'showGaleri'
    ];

    protected $rules = [
        'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024', // 1MB Max
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showGaleri($galeri)
    {
        $this->judul = $galeri['name'];
        $this->deskripsi = $galeri['phone'];
        $this->gambar = $galeri['gambar'];
        $this->status = $galeri['status'];
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

            

            $this->resetInput();
        }
    }

    private function resetInput()
    {
        $this->judul = null;
        $this->gambar = null;
        $this->status = null;
        $this->deskripsi = null;
}

}