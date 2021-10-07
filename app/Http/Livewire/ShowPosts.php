<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
//use Livewire\WithPagination;

class ShowPosts extends Component
{
    public $tags  = [];

//    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function mount()
    {
        $this->tags  = Tag::orderBy('name')->get();
    }

    public function render()
    {
        $posts = Post::online(1)->latest()->paginate(5);

        return view('livewire.show-posts', ['posts' => $posts]);
    }
}
