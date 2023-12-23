<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public function render()
    {
        return view('livewire.nav');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/'); // Redirect to your desired logout page
    }
}
