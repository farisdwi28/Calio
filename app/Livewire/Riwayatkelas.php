<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Jadwal;

class Riwayatkelas extends Component
{
    public $jadwals, $name, $tanggal, $kelas, $id, $isModal = false;

    public function render()
    {
        $this->jadwals = Jadwal::orderBy('created_at', 'DESC')->get();
        return view('livewire.riwayatkelas');
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
        $this->name = '';
        $this->tanggal = '';
        $this->kelas = '';
        $this->id = '';
    }

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'tanggal' => 'required|date',
            'kelas' => 'required',
        ]);

        Jadwal::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'tanggal' => $this->tanggal,
            'kelas' => $this->kelas,
        ]);

        session()->flash('message', 'Anggota berhasil ditambahkan.');

        $this->resetFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $jadwals = Jadwal::find($id);

        if ($jadwals) {
            $this->id = $jadwals->id;
            $this->name = $jadwals->name;
            $this->tanggal = $jadwals->tanggal;
            $this->kelas = $jadwals->kelas;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        $jadwals = Jadwal::find($id);
        $jadwals->delete();
        session()->flash('message', $jadwals->name . ' Dihapus');
    }
}
