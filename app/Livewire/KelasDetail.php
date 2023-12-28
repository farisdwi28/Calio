<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kelas;

class ArtikelDetail extends Component
{
    public $kelasId;
    public $kelas;

    public function mount($id)
    {
        $this->kelasId = $id;
        $this->ambilDatakelas();
    }

    public function ambilDatakelas()
    {
        $this->kelas = Kelas::findOrFail($this->artikelId);
    }
    public function showDetail($id)
    {
        $artikelId = $id;
        return view('kelas.kelas', compact('kelasId'));
    }

    public function render()
    {
        return view('livewire.kelas-detail');
    }
}
