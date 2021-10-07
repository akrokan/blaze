<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts   = [];
    public $post_id = '';
    public $title   = '';
    public $slug    = '';
    public $content = '';
    public $user_id = '';

    public $order  = 'created_at';
    public $isOpen = 0;

    public function create()
    {
        $this->reset();
        $this->toggle();
    }

    public function delete($id)
    {
        Post::find($id)->delete();

        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->post_id = $id;
        $this->title   = $post->title;
        $this->slug    = $post->slug;
        $this->content = $post->content;
        $this->user_id = $post->user_id;

        $this->toggle();
    }

    public function import()
    {

    }

    public function render()
    {
        $this->posts = Post::orderBy($this->order, 'DESC')->get();

        return view('livewire.admin.posts');
    }

    public function switchState($id)
    {
        $post = Post::findOrFail($id);

        /*
            Switch post state
            online <--> offline
        */
        if ($post->online == 0) {
            $post->online = 1;
        } else {
            $post->online = 0;
        }

        $post->save();
    }

    public function toggle()
    {
        $this->isOpen =! $this->isOpen;
    }
}