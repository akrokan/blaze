<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navigation extends Component
{
    public function login()
    {
//        Auth::login();

        $this->redirectRoute('login');
    }

    public function logout()
    {
        Auth::logout();

        $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
