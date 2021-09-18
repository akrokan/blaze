<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class ShowPostsByTag extends Component
{
    public $posts = [];
    public $post  = '';
    public $tags  = [];
    public $tag   = '';

    public function mount()
    {
        $this->posts = Tag::where('name', $this->tag)->first()->post()->get();
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}