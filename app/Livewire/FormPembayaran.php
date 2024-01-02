<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\makanan;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class FormPembayaran extends Component
{
    use WithFileUploads;

    public $pembayarans, $id, $name, $pesanan, $harga, $makananId, $makanans, $photo;
    public $isModal = 0;

    public function closeModal()
    {
        $this->isModal = false;
        return redirect('/food');
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function render()
    {
        $this->pembayarans = pembayaran::orderBy('created_at', 'DESC')->get();
        return view('livewire.form-pembayaran');
    }

    public function mount($id)
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
        }
        $this->makananId = $id;
        $this->ambilDataMakanan();
    }

    public function ambilDataMakanan()
{
    $makanan = makanan::findOrFail($this->makananId);
    $this->pesanan = $makanan->name;
    $this->harga = $makanan->harga;
}

    public function showDetail($id)
    {
        $makananId = $id;
        return view('Pembayaran.form', compact('makananId'));
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->name = '';
        $this->pesanan = '';
        $this->harga = '';
        $this->id = '';
        $this->photo = null;
    }

    public function add()
    {
        $this->validate([
            'photo' => 'nullable|image|max:1024',
            'name' => 'string|max:255',
            'pesanan' => 'string|max:255',
            'harga' => 'numeric',
        ]);

        try {
            $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;

            pembayaran::updateOrCreate(['id' => $this->id], [
                'photo' => $photoPath,
                'name' => $this->name,
                'pesanan' => $this->pesanan,
                'harga' => $this->harga,
            ]);

            session()->flash('message', 'Data pembayaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        $this->resetFields();
        $this->closeModal();
    }

    public function mount1()
    {

    }
}
