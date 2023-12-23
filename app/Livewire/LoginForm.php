<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class LoginForm extends Component
{
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
{
    $this->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {

        $authenticatedUser = Auth::user();

        $name = $authenticatedUser->name;
        $phone_number = $authenticatedUser->phone_number;
        $role = $authenticatedUser->role;

        Session::put('name', $name);
        Session::put('phone_number', $phone_number);

        if ($role === 'user') {
            return redirect()->intended('/');
        } elseif ($role === 'admin') {
            return redirect()->intended('/dashboardAdmin/userManage');
        }

    }

    $this->addError('username', 'Invalid credentials.');
}
}
