<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kelas;

class Cardio extends Component
{
    public $id;
    public $kategori;
    public $photo;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.cardio', [
            'Kelas' => Kelas::where('kategori', 'cardio')
    ->orderBy('created_at', 'DESC')
    ->get(),
        ]);
    }

    public function ambil($id)
    {
        $kelas = Kelas::find($id);
        if ($kelas) {
            $this->id = $kelas->id;
            $this->kategori = $kelas->kategori;
            $this->photo = $kelas->photo;
            $this->title = $kelas->title;
            $this->description = $kelas->description;
        }
        redirect()->intended('/yoga');
    }
}

