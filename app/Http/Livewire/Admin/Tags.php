<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
    public $tags = [];
    public $tag  = '';

    public $hover = 'hover:bg-gray-500';

    protected $listeners = ['refresh' => '$refresh'];

    public function mount()
    {
        $this->tags = Tag::orderBy('name')->get();
    }

    public function hydrate()
    {
        $this->tags = Tag::orderBy('name')->get();
    }

    public function hover()
    {
        $this->hover = 'hover:bg-gray-900';
    }

    public function refresh()
    {
        $this->reset('hover');
    }

    public function addTag()
    {
        if ($this->tag) 
        {
            $this->tag = Tag::firstOrCreate([
                'name' => $this->tag
            ]);

            $this->tags->prepend($this->tag);
        }

        $this->tag = '';

        $this->emit('refresh');
    }

    public function deleteTag($id)
    {
        Tag::destroy($id);

        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.tags');
    }
}
