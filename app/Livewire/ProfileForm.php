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
    public function render()
    {
        return view('livewire.profile-form');
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
        $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;
        if ($user) {
            $user->update([
                'name' => $this->name,
                'phone_number' => $this->phone_number,
                'username' => $this->username,
                'password' => bcrypt($this->password),
                'photo' => $photoPath,
            ]);

            session()->flash('message', 'Profil diperbarui');
            redirect()->to('/Profile');
        }
    }

    public function delete($id)
    {
        $users = user::find($id);
        $users->delete();
        session()->flash('message', $users->name . ' Dihapus');
    }


}
