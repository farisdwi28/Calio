<?php

namespace App\Livewire;
use App\Models\makanan;
use Livewire\Component;

class Jajan extends Component
{
    public $makans, $photo, $name, $description, $harga, $stok, $status, $id;
    public function render()
    {
        $this->makans = makanan::where('status', 'active')->take(4)->get();

        return view('livewire.jajan');
    }
}
