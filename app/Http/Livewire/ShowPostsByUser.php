<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\User;
use Livewire\Component;

class ShowPostsByUser extends Component
{
    public $tags  = [];
    public $user  = '';

    public function mount()
    {
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        $user = User::where('username', $this->user)->first();
        $posts = $user->posts()->online(1)->paginate(5);

        return view('livewire.show-posts', ['posts' => $posts]);
    }
}
