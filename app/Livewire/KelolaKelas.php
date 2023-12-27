<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kelas;
use Livewire\WithFileUploads;

class KelolaKelas extends Component
{
    use WithFileUploads;

    public $class, $kategori, $photo, $title, $description, $id;
    public $isModal = 0;

    public function render()
    {
        $this->class = Kelas::orderBy('created_at', 'DESC')->get(); // Updated to order by created_at
        return view('livewire.kelola-kelas');
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
        $this->title = '';
        $this->kategori = '';
        $this->description = '';
    }

    public function add()
    {
        $this->validate([
            'photo' => 'nullable|image|max:1024',
            'title' => 'string|max:255',
            'description' => 'string|max:1000000000',
        ]);

        try {
            $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;

            Kelas::updateOrCreate(['id' => $this->id], [
                'kategori' => $this->kategori,
                'photo' => $photoPath,
                'title' => $this->title,
                'description' => $this->description,
            ]);

            session()->flash('message', 'Kelas berhasil ditambahkan.');
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        $this->resetFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $class = Kelas::find($id);

        if ($class) {
            $this->id = $class->id;
            $this->kategori = $class->kategori;
            $this->photo = $class->photo;
            $this->title = $class->title;
            $this->description = $class->description;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $class = Kelas::find($id);
        $class->delete();
        session()->flash('message', $class->title . ' Dihapus');
    }
}
