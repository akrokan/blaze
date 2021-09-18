<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public $comment  = '';
    public $post_id  = '';

    public function mount($id)
    {
        $comments = Comment::latest()->where('post_id', $id)->get();
        $this->comments = $comments;
        $this->post_id  = $id;
    }

    public function addComment()
    {
//        $this->validate(['input' => 'required|max:100']);

        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $this->post_id,
            'content' => $this->comment
        ]);

        $this->comments->prepend($comment);
        $this->comment = '';

        session()->flash('message', 'Thanks for the comment');
    }

    public function render()
    {
        return view('livewire.comments');
    }
}