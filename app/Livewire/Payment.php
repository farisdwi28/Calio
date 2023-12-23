<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\pembayaran;

class Payment extends Component
{
    public $pembayaran, $name, $alamat, $nama_makanan, $total_harga, $id;
    public $isModal = 0;
    public function render()
    {
        $this->pembayaran = pembayaran::orderBy('created_at', 'DESC')->get();
        return view('livewire.payment');
    }

    public function create() {
        $this->openModal();
        $this->resetFields();
    }

    public function resetFields() {
        $this->name = '';
        $this->alamat = '';
        $this->nama_makanan = '';
        $this->total_harga = '';
        $this->id = '';
    }

    public function addPayment()
    {
        $this->validate([
            'name' => 'required|string',
            'alamat' => 'required',
            'nama_makanan' => 'required',
            'total_harga' => 'required',
        ]);

        pembayaran::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'alamat' => $this->alamat,
            'nama_makanan' => $this->nama_makanan,
            'total_harga' => $this->total_harga,
        ]);

        session()->flash('message', 'Payment berhasil ditambahkan.');
        $this->resetFields();
        redirect()->intended('/tablePayment');
    }

    public function edit($id) {
        $pembayaran = pembayaran::find($id);

        if($pembayaran) {
            $this->id = $pembayaran->id;
            $this->name = $pembayaran->name;
            $this->alamat = $pembayaran->alamat;
            $this->nama_makanan = $pembayaran->nama_makanan;
            $this->total_harga = $pembayaran->total_harga;
        }

        $this->openModal();
    }
    public function delete($id) {
        $pembayaran = pembayaran::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
        $pembayaran->delete(); //LALU HAPUS DATA
        session()->flash('message', $pembayaran->name.' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
    }
}
