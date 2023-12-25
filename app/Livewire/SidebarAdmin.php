<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SidebarAdmin extends Component
{
    public function render()
    {
        return view('livewire.sidebar-admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/'); 
    }
}
