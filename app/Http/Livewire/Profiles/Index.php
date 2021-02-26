<?php

namespace App\Http\Livewire\Profiles;

use Livewire\Component;
use App\Models\Profil;

class Index extends Component
{
    public $profileId;
    public $statusUpdate = false;

    protected $listeners = [
        'profileStored' => 'handleStored',
        'profileUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        $profiless = Profil::all();

        return view('livewire.profiles.index', ['profiless'=>$profiless])
            ->extends('layouts.master');
    }

    public function getProfile($id)
    {
        $this->statusUpdate = true;
        $profiless = Profil::find($id);
        $this->emit('getProfile', $profiless);
    }

    public function handleStored($profiless)
    {
        // dd($profiless);
        session()->flash('message', 'Profiless ' . $profiless['fb'] . ' was stored!' );
    }

    public function handleUpdated($profiless)
    {
        // dd($profiless);
        session()->flash('message', 'Profiless ' . $profiless['fb'] . ' was updated!' );
    }

    public function update()
    {
        $profiless = $this->validate([
            'alamat' => 'required',
            'fb' => 'required',
            'instagram' => 'required',
            'telepon' => 'required',
            'deskripsi_konten' => 'required',
            'status' => 'required',
        ]);
            
        if ($this->profileId) {
            $profiless = Profil::find($this->profileId);
            $profiless->update([
                'alamat' => $profiless->alamat,
                'fb' => $profiless->fb,
                'instagram' => $profiless->instagram,
                'telepon' => $profiless->telepon,
                'deskripsi_konten' => $profiless->deskripsi_konten,
                'status' => $profiless->status,
            ]);

            $this->resets();

            $this->emit('profileUpdated', $profiless);
        }
    }

    public function edit($id){
        $profiless = Profil::where('id',$id)->first();
        $this->alamat = $profiless->alamat;
        $this->fb = $profiless->fb;
        $this->instagram = $profiless->instagram;
        $this->telepon = $profiless->telepon;
        $this->deskripsi_konten = $profiless->deskripsi_konten;
        $this->status = $profiless->status;
    }

    public function delete($id){
        $profiless = Profil::where('id',$id)->first();
        $this->fb = $profiless->fb;

        if($id){
            Profil::where('id',$id)->delete();
            session()->flash('message', 'data berhasil dihapus');
        }
    }

}
