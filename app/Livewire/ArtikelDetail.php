<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Artikel;

class ArtikelDetail extends Component
{
    public $artikelId;
    public $article;

    public function mount($id)
    {
        $this->artikelId = $id;
        $this->ambilDataArtikel();
    }

    public function ambilDataArtikel()
    {
        $this->article = Artikel::findOrFail($this->artikelId);
    }
    public function showDetail($id)
    {
        $artikelId = $id;
        return view('artikel.artikel', compact('artikelId'));
    }

    public function render()
    {
        return view('livewire.artikel-detail');
    }
}
