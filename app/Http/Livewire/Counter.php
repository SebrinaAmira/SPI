<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $count;
    public $name;
    public $user;

    public function mount($name)
    {
        $this->fill([
            'count' => 0,
            'name' => '',
            'user' => null, 
        ]);
    }

    public function increment()
    {
        $this->count =  $this ->count + 1;
    }

    public function decrement()
    {
        if ($this->count < 1) {
            return;
        }
        $this->count--;
    }

    public function updated($name, $value) 
    {
        if ($name == "name" && strlen($value) >= 3) {
            $this->user = User::where('name', 'like', "{$this->name}%")->first();
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
