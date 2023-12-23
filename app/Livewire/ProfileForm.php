<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
class ProfileForm extends Component
{
    public $id, $name, $phone_number, $username, $password;
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
    ]);

    $user = User::find(Auth::id());

    if ($user) {
        $user->update([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'username' => $this->username,
            'password' => bcrypt($this->password),
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
