<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $src = '';
    public $var = '';

    protected $listeners = ['showImg', 'showLogin'];

    public function showImg($arr)
    {
        $src = array_shift($arr);
        $this->var = '<img src="'.$src.'">';
    }

    public function showLogin()
    {
//        $this->var = '@livewire("login")';
        $this->var = '<livewire:login>';
    }

    public function render()
    {
        $modal = $this->var;

        return view('livewire.modal', ['modal' => $modal]);
    }
}
