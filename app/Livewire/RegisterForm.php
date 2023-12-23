<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\user;

class RegisterForm extends Component
{
    public $users, $name, $phone_number, $username, $password, $id, $role;
    public function render()
    {
        $this->users = user::orderBy('created_at', 'DESC')->get();
        return view('livewire.register-form');
    }

    public function create()
    {
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->name = '';
        $this->phone_number = '';
        $this->username = '';
        $this->password = '';
        $this->id = '';
    }

    public function createUpdate()
    {
        $this->validate([
            'name' => 'required|string',
            'phone_number' => 'required|numeric',
            'username' => 'required|string|unique:users,username,' . $this->id,
            'password' => 'required|string|min:8',
        ]);

        user::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('message', $this->id ? $this->name . ' Diperbaharui' : $this->name . ' Ditambahkan');
        $this->resetFields();
        redirect()->intended('/login');
    }
}
