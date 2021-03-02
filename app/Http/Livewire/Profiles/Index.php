<?php

namespace App\Http\Livewire\Profiles;

use Livewire\Component;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $alamat, $fb, $instagram, $telepon, $deskripsi_konten, $status, $created_by, $updated_by, $profile_id, $isForm;
    public $statusUpdate = false;

    protected $rules = [
        'alamat' => 'required',
        'fb' => 'required',
        'instagram' => 'required',
        'telepon' => 'required',
        'deskripsi_konten' => 'required',
        'status' => 'required',
    ];

    public function back() 
    {
        redirect('profil'); 
    }

    public function render()
    {
        $profiless = Profil::all();

        return view('livewire.profiles.index', ['profiless'=>$profiless])
            ->extends('layouts.master');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create() 
    {
        $this->openForm();
    }

    public function store()
    {
        $profiless = $this->validate([
            'alamat' => 'required',
            'fb' => 'required',
            'instagram' => 'required',
            'telepon' => 'required',
            'deskripsi_konten' => 'required',
            'status' => 'required',
        ]);

        Profil::updateOrCreate(['id' => $this->profile_id], [
            'alamat' => $this->alamat,
            'fb' => $this->fb,
            'instagram' => $this->instagram,
            'telepon' => $this->telepon,
            'deskripsi_konten' => $this->deskripsi_konten,
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
        $profiless = Profil::find($id);
        $this->profile_id = $id;
        $this->alamat = $profiless->alamat;
        $this->fb = $profiless->fb;
        $this->instagram = $profiless->instagram;
        $this->telepon = $profiless->telepon;
        $this->deskripsi_konten = $profiless->deskripsi_konten;
        $this->status = $profiless->status;

        $this->openForm();
    }

    public function delete($id)
    {
        $profiless = Profil::where('id',$id)->first();
        $this->profile_id = $id;

        if($id){
            Profil::where('id',$id)->delete();
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

}