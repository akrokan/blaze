<?php

namespace App\Http\Livewire;

use App\Models\Tag as LiveTag;
use Livewire\Component;

class Tag extends Component
{
    public $tags = [];
    public $tag  = '';

    public $hover = 'hover:bg-gray-500';

    protected $listeners = ['refresh' => '$refresh'];

    public function mount()
    {
        $this->tags = LiveTag::orderBy('name')->get();
    }

    public function hydrate()
    {
        $this->tags = LiveTag::orderBy('name')->get();
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
        $tag = LiveTag::create([
            'name' => $this->tag
        ]);

        $this->tags->prepend($tag);
        $this->tag = '';

        $this->emit('refresh');
    }

    public function deleteTag($id)
    {
        LiveTag::destroy($id);

        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.tag');
    }
}
