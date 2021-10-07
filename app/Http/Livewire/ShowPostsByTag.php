<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class ShowPostsByTag extends Component
{
    public $tags  = [];
    public $tag   = '';

    public function mount()
    {
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        $tag = Tag::where('name', $this->tag)->first();
        $posts = $tag->posts()->online(1)->paginate(5);

        return view('livewire.show-posts', ['posts' => $posts]);
    }
}