<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public $comment  = '';

    public function delete($id)
    {
        Comment::find($id)->delete();

        session()->flash('message', 'Comment Deleted Successfully.');
    }

    public function render()
    {
        $this->comments = Comment::All();

        return view('livewire.admin.comments');
    }
}
