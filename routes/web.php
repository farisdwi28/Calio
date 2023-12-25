<?php

use App\Livewire\KelasJadwal;
use App\Livewire\RegisterForm;
// use App\Livewire\Makanans;
use App\Livewire\ProfileForm;
use App\Livewire\Riwayatkelas;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('home');
});

Route::get('/artikel', function () {
    return view('artikel/artikel');
});

Route::get('/artikel1', function () {
    return view('artikel/artikel1');
});

Route::get('/login', function () {
    return view('Login/login');
});

Route::get('/register', function () {
    return view('Register/register')->with('livewireComponent', app(RegisterForm::class));
});

Route::group(['middleware' => 'auth.custom'], function () {
    Route::get('/dashboardAdmin', function () {
        return view('AdminCalio/Dashboard');
    });

    Route::get('/Profile', function () {
        return view('Profile/profile')->with('livewireComponent', app(ProfileForm::class));
    });

    Route::get('/kelas', function () {
        return view('kelas/kelas');
    });

    Route::get('/jadwal', function () {
        return view('kelas/jadwal')->with('livewireComponent', app(KelasJadwal::class));
    });

    Route::get('/riwayatkelas', function () {
        return view('kelas/riwayatkelas')->with('livewireComponent', app(Riwayatkelas::class));
    });

    Route::get('/workout', function () {
        return view('kelas/workout');
    });

    Route::get('/payment', function () {
        return view('Payment');
    });

    Route::get('/tablePayment', function () {
        return view('detailPayment');
    });

    Route::get('/makanan', function () {
        return view('makanan');
    });

    Route::get('/dashboardAdmin/userManage', function () {
        return view('AdminCalio/userManage');
    });

    Route::get('/dashboardAdmin/kelolaJadwal', function () {
        return view('AdminCalio/kelolaJadwal');
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

    Route::get('/food2', function () {
        return view('food2');
    });

    Route::get('/detail', function () {
        return view('detail');
    });
});



