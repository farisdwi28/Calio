<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\makanan;

class DetailMenu extends Component
{
    public $makananId;
    public $makanan;

    public function mount($id)
    {
        $this->makananId = $id;
        $this->ambilDataMakanan();
    }
    public function ambilDataMakanan()
    {
        $this->makanan = makanan::findOrFail($this->makananId);
    }
    public function showDetail($id)
    {
        $makananId = $id;
        return view('detail', compact('makananId'));
    }

    public function render()
    {
        return view('livewire.detail-menu');
    }
}
