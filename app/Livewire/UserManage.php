<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\user;

class UserManage extends Component
{
    public $users, $name, $username , $phone_number, $role , $id , $isModal = false;
    public function render()
    {
        $this->users = User::where('role', 'user')->orderBy('created_at', 'DESC')->get();
        return view('livewire.user-manage');
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->name = '';
        $this->username = '';
        $this->phone_number = '';
    }

    public function add()
    {
        $this->validate([
            'name' => 'string',
            'username' => 'string|unique:users,username,' . $this->id,
            'phone_number' => 'numeric',
        ]);

        user::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'username' => $this->username,
            'phone_number' => $this->phone_number,
        ]);

        session()->flash('message', 'Anggota berhasil ditambahkan.');

        $this->resetFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $users = user::find($id);

        if ($users) {
            $this->id = $users->id;
            $this->name = $users->name;
            $this->username = $users->username;
            $this->phone_number = $users->phone_number;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $users = user::find($id);
        $users->delete();
        session()->flash('message', $users->name . ' Dihapus');
    }
}
