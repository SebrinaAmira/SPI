<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $post;

    public function render()
    {
            return view('livewire.post.index', [
            'index' => Post::paginate(10),
        ]);

        // return view('livewire.post.index')
        //     ->layout('layouts.app')
        //     ->slot('body');
    }
}
