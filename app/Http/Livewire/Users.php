<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $name;
    public $email;
    public $password;
    public $roles;

    public function render()
    {
        $users = User::all();
        return view('admin.livewire.users', ['users' => $users]);
    }

    public function addUser()
    {
        
    }
}
