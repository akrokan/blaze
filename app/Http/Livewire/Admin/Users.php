<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{
    public $users       = [];
    public $user_id     = '';
    public $username    = '';
    public $email       = '';
    public $firstname   = '';
    public $lastname    = '';
    public $password    = '';

    public $isOpen = 0;

    public function create()
    {
        $this->reset();
        $this->toggle();
    }

    public function delete($id)
    {
        User::find($id)->delete();

        session()->flash('message', 'User Deleted Successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->user_id   = $id;
        $this->username  = $user->username;
        $this->email     = $user->email;
        $this->firstname = $user->firstname;
        $this->lastname  = $user->lastname;

        $this->toggle();
    }

    public function render()
    {
        $this->users = User::All();

        return view('livewire.admin.users');
    }

    public function store()
    {
        $this->validate([
            'username'  => 'required',
            'email'     => 'required',
        ]);
    
        User::updateOrCreate(['id' => $this->user_id], [
            'username'  => $this->username,
            'email'     => $this->email,
            'firstname' => $this->firstname,
            'lastname'  => $this->lastname,
        ]);
   
        session()->flash('message', 
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');
   
        $this->toggle();
        $this->reset();
    }

    public function toggle()
    {
        $this->isOpen =! $this->isOpen;
    }
}
