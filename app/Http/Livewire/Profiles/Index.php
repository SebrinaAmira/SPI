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
    

    public function render()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();
        // if($profiless) {
        //     $this->edit($profiless->id);
        // } else {
            $this->openForm();
        // }

        return view('livewire.profiles.index', ['profiless'=>$profiless])
            ->extends('layouts.master');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        // $profiless = $this->validate([
        //     'alamat' => 'required',
        //     'fb' => 'required',
        //     'instagram' => 'required',
        //     'telepon' => 'required',
        //     'deskripsi_konten' => 'required',
        //     'status' => 'required',
        // ]);
        $this->validate();

        if($this->profile_id) {
            // return 'edit';
            Profil::where('id', $this->profile_id)->update([
                'alamat' => $this->alamat,
                'fb' => $this->fb,
                'instagram' => $this->instagram,
                'telepon' => $this->telepon,
                'deskripsi_konten' => $this->deskripsi_konten,
                'status' => $this->status,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            redirect()->to('/profil');

        } else {
            // return 'tambah';
            Profil::create([
                'alamat' => $this->alamat,
                'fb' => $this->fb,
                'instagram' => $this->instagram,
                'telepon' => $this->telepon,
                'deskripsi_konten' => $this->deskripsi_konten,
                'status' => $this->status,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                ]);
            }

        redirect()->to('/profil');

        session()->flash('message', 'Data Berhasil Diubah.');

        $this->closeForm();

    }

    public function edit($id)
    {
        // return $id;
        $profiless = Profil::orderBy('id', 'ASC')->first();
        $this->profile_id = $id;
        $this->alamat = $profiless->alamat;
        $this->fb = $profiless->fb;
        $this->instagram = $profiless->instagram;
        $this->telepon = $profiless->telepon;
        $this->deskripsi_konten = $profiless->deskripsi_konten;
        $this->status = $profiless->status;

        // $this->openForm();
    }

    public function mount()
    {
        $profiless = Profil::orderBy('id', 'ASC')->first();
        if ($profiless) {
            $this->profile_id = $profiless->id;
            $this->alamat = $profiless->alamat;
            $this->fb = $profiless->fb;
            $this->instagram = $profiless->instagram;
            $this->telepon = $profiless->telepon;
            $this->deskripsi_konten = $profiless->deskripsi_konten;
            $this->status = $profiless->status;
            return view('livewire.profiles.index', ['profiless'=>$profiless])
                ->extends('layouts.master');
        } else {
            $this->openForm();
            return view('livewire.profiles.index', ['profiless'=>$profiless])
            ->extends('layouts.master');
        }

        // return $profiless;

        // $this->edit();
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
