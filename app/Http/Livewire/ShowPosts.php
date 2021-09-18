<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts = [];
    public $post  = '';
    public $tags  = [];

    public function mount()
    {
        $this->posts = Post::where('online', 1)->latest()->get();
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
