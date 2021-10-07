<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user        = '';
    public $username    = '';
    public $email       = '';
    public $firstname   = '';
    public $lastname    = '';
    
    public function render()
    {
        $user = User::findOrFail(Auth::user()->id);

        $this->user      = $user;
        $this->username  = $user->username;
        $this->email     = $user->email;
        $this->firstname = $user->firstname;
        $this->lastname  = $user->lastname;

        return view('livewire.profile');
    }

    public function store()
    {
        $this->validate([
            'username'  => 'required',
            'email'     => 'required',
        ]);
    
        User::find(Auth::user()->id)->update([
            'username'  => $this->username,
            'email'     => $this->email,
            'firstname' => $this->firstname,
            'lastname'  => $this->lastname,
        ]);

        session()->flash('message', 'Profile Updated Successfully.');  
   
        return redirect()->to('/'.$this->username.'/profile');
    }
}