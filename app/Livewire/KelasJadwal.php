<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;

class KelasJadwal extends Component {
    public $jadwals, $name, $tanggal, $kelas, $id;
    public $isModal = 0;


    public function render() {
        $this->jadwals = Jadwal::orderBy('created_at', 'DESC')->get();
        return view('livewire.kelas-jadwal');
    }

    public function create() {
        $this->resetFields();
        $this->openModal();
    }
    public function closeModal() {
        $this->isModal = true;
        return redirect('/workout');
    }

    public function openModal() {
        $this->isModal = true;
    }


    public function resetFields() {
        $this->name = '';
        $this->tanggal = '';
        $this->kelas = '';
        $this->id = '';
    }

    public function mount()
    {
        $jadwal = Auth::user();

        if ($jadwal) {
            $this->id = $jadwal->id;
            $this->name = $jadwal->name;
            $this->tanggal = $jadwal->tanggal;
            $this->kelas = $jadwal->username;
        }
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


        session()->flash('message', 'Pengguna berhasil ditambahkan.');

        $this->resetFields();
        return redirect('/riwayatkelas');
    }
}
