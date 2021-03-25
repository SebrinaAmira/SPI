<?php

namespace App\Http\Livewire\Konsultasi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $telepon, $alamat, $pesan, $status, $konsultasi_id, $isForm, $created_by, $updated_by, $paginate;
    public $statusUpdate = false;
    public $search = '';
    
    protected $rules = [
        'nama' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'pesan' => 'required',
        'status' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

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
        ]);

        Konsultasi::updateOrCreate(['id' => $this->konsultasi_id], [
            'nama' => $this->nama,
            'telepon' => 'http://wa.me/+62'.$this->telepon,
            'alamat' => $this->alamat,
            'pesan' => $this->pesan,
            'status' => $this->status,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Data Berhasil Ditambah.');
        
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

        session()->flash('pesan', 'Data Berhasil Dihapus.');

        redirect('konsultasi');

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

        return view('livewire.konsultasi.index', [
            'knsultasi' => $knsultasi,
            'knsultasi' => Konsultasi::where('nama', 'like', '%'.$this->search.'%')
            ->orWhere('pesan', 'like', '%'.$this->search.'%')
            ->orWhere('alamat', 'like', '%'.$this->search.'%')
            ->orWhere('status', 'like', '%'.$this->search.'%')
            ->orWhere('telepon', 'like', '%'.$this->search.'%')
            ->paginate($this->paginate),
            ])->extends('layouts.master');
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }

}
