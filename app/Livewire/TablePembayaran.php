<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\pembayaran;

class TablePembayaran extends Component
{
    public $pembayarans, $id, $name, $pesanan, $harga, $photo;
    public $isModal = 0;
    public function render()
    {
        $this->pembayarans = pembayaran::orderBy('created_at', 'DESC')->get();
        return view('livewire.table-pembayaran');
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

    public function edit($id)
    {
        $pembayarans = pembayaran::find($id);

        if ($pembayarans) {
            $this->id = $pembayarans->id;
            $this->name = $pembayarans->name;
            $this->harga = $pembayarans->harga;
            $this->photo = $pembayarans->photo;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $pembayarans = pembayaran::find($id);
        $pembayarans->delete();
        session()->flash('message', $pembayarans->name . ' Dihapus');
    }
}
