<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class TableAdmin extends Component
{
    public $users, $name, $username, $phone_number, $role, $id, $isModal = false, $password;
    public function render()
    {
        $this->users = User::where('role', 'admin')->orderBy('created_at', 'DESC')->get();
        return view('livewire.table-admin');
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }
    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }
    public function resetFields()
    {
        $this->name = '';
        $this->username = '';
        $this->phone_number = '';
        $this->role = 'admin';
        $this->password = '';
    }

    public function add()
    {
        $this->validate([
            'name' => 'string',
            'username' => 'string|unique:users,username,' . $this->id,
            'phone_number' => 'numeric',
            'role' => 'string',
            'password' => 'required|string|min:8',
        ]);

        $userData = [
            'name' => $this->name,
            'username' => $this->username,
            'phone_number' => $this->phone_number,
            'role' => 'admin',
            'password' => $this->password ? bcrypt($this->password) : null,
        ];

        User::updateOrCreate(['id' => $this->id], $userData);

        session()->flash('message', 'Anggota berhasil ditambahkan.');

        $this->resetFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->id = $user->id;
            $this->name = $user->name;
            $this->username = $user->username;
            $this->phone_number = $user->phone_number;
            $this->password = $user->password;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message', $user->name . ' Dihapus');
    }
}
