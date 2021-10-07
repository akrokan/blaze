<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class ShowPost extends Component
{
    public $post = '';
    public $slug = '';
    public $tags = [];

    public function mount() {
        $this->post = Post::where('slug', $this->slug)->firstOrFail();
        $this->tags = Tag::orderBy('name')->get();
//        dd($post->title);
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
