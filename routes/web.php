<?php

use App\Livewire\KelasJadwal;
use App\Livewire\RegisterForm;
use App\Livewire\ProfileForm;
use App\Livewire\Riwayatkelas;
use App\Livewire\Article;
use App\Livewire\ArtikelDetail;
use App\Livewire\KelolaKelas;
use App\Livewire\FormPembayaran;
use App\Livewire\DetailMenu;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('home');
});

Route::get('/artikel/{id}', [ArtikelDetail::class, 'showDetail'])->name('artikel.artikel');

Route::get('/login', function () {
    return view('Login/login');
});

Route::get('/register', function () {
    return view('Register/register')->with('livewireComponent', app(RegisterForm::class));
});

Route::get('/teams', function () {
    return view('Teams');
});

Route::group(['middleware' => 'auth.custom'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/dashboardAdmin/userManage', function () {
            return view('AdminCalio/userManage');
        });

        Route::get('/dashboardAdmin/kelolaAdmin', function () {
            return view('AdminCalio/kelolaAdmin');
        });

        Route::get('/dashboardAdmin/kelolaJadwal', function () {
            return view('AdminCalio/kelolaJadwal');
        });

        Route::get('/dashboardAdmin/kelolaArtikel', function () {
            return view('AdminCalio/kelolaArtikel')->with('livewireComponent', app(Article::class));
        });

        Route::get('/dashboardAdmin/kelolaMakanan', function () {
            return view('AdminCalio/kelolaMakanan');
        });

        Route::get('/dashboardAdmin/kelolaPembayaran', function () {
            return view('AdminCalio/kelolaPembayaran');
        });

        Route::get('/dashboardAdmin/kelolaKelas', function () {
            return view('AdminCalio/kelolaKelas')->with('livewireComponent', app(KelolaKelas::class));
        });
    });

    Route::get('/Profile', function () {
        return view('Profile/profile')->with('livewireComponent', app(ProfileForm::class));
    });

    Route::get('/kelas', function () {
        return view('kelas/kelas');
    });

    Route::get('/formpembayaran/{id}', [FormPembayaran::class, 'showDetail'])->name('Pembayaran.form');

    Route::get('/jadwal', function () {
        return view('kelas/jadwal')->with('livewireComponent', app(KelasJadwal::class));
    });

    Route::get('/riwayatkelas', function () {
        return view('kelas/riwayatkelas')->with('livewireComponent', app(Riwayatkelas::class));
    });

    Route::get('/workout', function () {
        return view('kelas/workout');
    });

    Route::get('/makanan', function () {
        return view('makanan');
    });

    Route::get('/cardio', function () {
        return view('kelas/cardio');
    });

    Route::get('/yoga', function () {
        return view('kelas/yoga');
    });

    Route::get('/food', function () {
        return view('food');
    });

    Route::get('/detail/{id}', [DetailMenu::class, 'showDetail'])->name('detail');
});

