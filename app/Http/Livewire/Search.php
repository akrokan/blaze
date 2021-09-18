<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Search extends Component
{
    public $query = '';
    public $posts = [];
    public $index = 0;

    public function dec()
    {
        if ($this->index === 0)
        {
            $this->index = count($this->posts) - 1;
            return;
        }
        $this->index--;
    }

    public function inc()
    {
        if ($this->index === count($this->posts) - 1)
        {
            $this->index = 0;
            return;
        }
        $this->index++;
    }

    public function updatedQuery()
    {
        $words = '%' .$this->query . '%';

        if (strlen($this->query) > 2)
        {
            if (Auth::user() && Auth::user()->role == 'admin') {
                $this->posts = Post::where('title', 'like', $words)
                                    ->orWhere('content', 'like', $words)->get();
            } else {
                $this->posts = Post::online(1)
                                    ->where(function($query) use($words) {
                                        return $query
                                            ->where('title', 'like', $words)
                                            ->orWhere('content', 'like', $words);
                                    })->get();
            }
        }
    }

    public function show()
    {
        if ($this->posts->isNotEmpty())
        {
            return redirect()->route('show', $this->posts[$this->index]->slug);
        }
    }

    public function res()
    {
        $this->reset('index');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
