<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\user;

class UserManage extends Component
{
    public $users, $name, $username , $phone_number, $role;
    public function render()
    {
        $this->users = User::where('role', 'user')->orderBy('created_at', 'DESC')->get();
        return view('livewire.user-manage');
    }
}
