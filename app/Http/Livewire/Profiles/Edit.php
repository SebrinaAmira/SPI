<?php

namespace App\Http\Livewire\Profiles;

use Livewire\Component;
use App\Models\Profil;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.profiles.edit')
            ->extends('layouts.master');
    }
    
}
