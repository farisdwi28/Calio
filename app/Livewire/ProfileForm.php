<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class ProfileForm extends Component
{
    use WithFileUploads;

    public $id, $name, $phone_number, $username, $password, $photo;
    public $showPassword = false;
    public function render()
    {
        return view('livewire.profile-form');
    }

    public function mount()
    {
        $user = Auth::user();

        if ($user) {
            $this->id = $user->id;
            $this->name = $user->name;
            $this->phone_number = $user->phone_number;
            $this->username = $user->username;
        }
    }

    public function lihatpassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function edit()
    {
        $this->validate([
            'name' => 'string|max:255',
            'phone_number' => 'string|max:20',
            'username' => 'string|max:255',
            'password' => 'string|min:8',
            'photo' => 'nullable|image|max:1024',
        ]);

        $user = User::find(Auth::id());

        if ($user) {
            $userData = [
                'name' => $this->name,
                'phone_number' => $this->phone_number,
                'username' => $this->username,
                'password' => $this->password ? bcrypt($this->password) : $user->password,
            ];

            if ($this->photo) {
                $userData['photo'] = $this->photo->store('photos', 'public');
            }

            $user->update($userData);

            session()->flash('message', 'Profil diperbarui');
            return redirect('/Profile');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            session()->flash('message', $user->name . ' Dihapus');
            return redirect('/home'); 
        }
    }
}
