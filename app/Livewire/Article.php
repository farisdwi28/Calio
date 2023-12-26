<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Artikel;
use Livewire\WithFileUploads;

class Article extends Component
{
    use WithFileUploads;

    public $articles, $photo, $title, $shortdescription, $description, $id;
    public $isModal = 0;

    public function render()
    {
        $this->articles = Artikel::all();
        return view('livewire.article');
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
        $this->shortdescription = '';
        $this->description = ''; // Fixed typo here
    }

    public function add()
{
    $this->validate([
        'photo' => 'nullable|image|max:1024',
        'title' => 'string|max:255',
        'shortdescription' => 'string|max:200',
        'description' => 'string|max:1000000000',
    ]);

    try {
        $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;

        Artikel::updateOrCreate(['id' => $this->id], [
            'photo' => $photoPath,
            'title' => $this->title,
            'shortdescription' => $this->shortdescription,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Article berhasil ditambahkan.');
    } catch (\Exception $e) {
        session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    $this->resetFields();
    $this->closeModal();
}


    public function edit($id)
    {
        $articles = Artikel::find($id);

        if ($articles) {
            $this->id = $articles->id;
            $this->photo = $articles->photo;
            $this->title = $articles->title;
            $this->shortdescription = $articles->shortdescription;
            $this->description = $articles->description;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $articles = Artikel::find($id);
        $articles->delete();
        session()->flash('message', $articles->title . ' Dihapus');
    }
}
