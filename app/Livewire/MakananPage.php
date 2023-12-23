<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Makanan; // Make sure to use the correct case for the model name

class MakananPage extends Component
{
    public $makanans, $name, $description, $image, $makanan_id,$harga,$stok, $id;
    public $isModal = 0;

    public function render()
    {
        $this->makanans = Makanan::orderBy('created_at', 'DESC')->get();
        return view('livewire.makanan-page');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
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
        $this->makanan_id = null;
        $this->name = '';
        $this->description = '';
        $this->image = '';
        $this->harga = '';
        $this->stok ='';
        $this->id = '';
    }

    public function store()
{
    $this->validate([
        'name' => 'required|string',
        'description' => 'required',
        'image' => 'required',
        'harga' => 'required',
        'stok' => 'required|integer|min:0',
    ]);

    Makanan::updateOrCreate(['id' => $this->makanan_id], [
        'name' => $this->name,
        'description' => $this->description,
        'image' => $this->image,
        'harga' => $this->harga,
        'stok' => $this->stok,
    ]);

    session()->flash('message', $this->id ? $this->name . ' Diperbaharui' : $this->name . ' Ditambahkan');
    $this->closeModal();
    $this->resetFields();
}


    public function edit($id)
    {
        $makanans = Makanan::find($id);
        $this->makanan_id = $id;
        $this->name = $makanans->name;
        $this->description = $makanans->description; // Fix the typo here (change 'decription' to 'description')
        $this->image = $makanans->image;
        $this->harga = $makanans->harga;
        $this->stok = $makanans->stok;

        $this->openModal();
    }

    public function delete($id)
    {
        $makanans = Makanan::find($id);
        $makanans->delete();
        session()->flash('message', $makanans->name . ' Dihapus');
    }
}
