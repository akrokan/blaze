<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Livewire\Component;

class ShowPostsByUser extends Component
{
    public $posts = [];
    public $post  = '';
    public $tags  = [];
    public $users = [];
    public $user  = '';

    public function mount()
    {
        $this->posts = User::where('username', $this->user)->first()->posts()->get();
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
