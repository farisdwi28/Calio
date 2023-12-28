<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\makanan;
use Livewire\WithFileUploads;

class Makan extends Component
{
    use WithFileUploads;

    public $makans, $photo, $name, $description, $harga, $stok, $status, $id;
    public $isModal = 0;
    public function render()
    {
        $this->makans = makanan::orderBy('created_at', 'DESC')->get();
        return view('livewire.makan');
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->photo = null;
        $this->name = '';
        $this->description = '';
        $this->harga = '';
        $this->stok = '';
        $this->status = '';
    }

    public function add()
{
    $this->validate([
        'photo' => 'nullable|image|max:1024', // Add a custom error message
        'name' => 'string|max:255',
        'description' => 'string|max:200',
        'harga' => 'numeric',
        'stok' => 'numeric',
        'status' => 'in:active,inactive',
    ]);

    try {
        $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;

        makanan::updateOrCreate(['id' => $this->id], [
            'photo' => $photoPath,
            'name' => $this->name,
            'description' => $this->description,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Makanan berhasil ditambahkan.');
    } catch (\Exception $e) {
        session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    $this->resetFields();
    $this->closeModal();
}

    public function edit($id)
    {
        $makans = makanan::find($id);

        if ($makans) {
            $this->id = $makans->id;
            $this->photo = $makans->photo;
            $this->name = $makans->name;
            $this->description = $makans->description;
            $this->harga = $makans->harga;
            $this->stok = $makans->stok;
            $this->status = $makans->status;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $makans = makanan::find($id);
        $makans->delete();
        session()->flash('message', $makans->name . ' Dihapus');
    }
}
