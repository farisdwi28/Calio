<?php

namespace App\Livewire;
use App\Models\makanan;
use Livewire\Component;

class Jajan extends Component
{
    public $makans, $photo, $name, $description, $harga, $stok, $status,$kategori, $id;
    public function render()
    {
        $this->makans = makanan::where('status', 'active')
        ->whereIn('kategori', ['makanan', 'minuman'])
        ->take(8)
        ->get();

        return view('livewire.jajan');
    }
}
