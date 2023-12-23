<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $fillable = ['name', 'alamat', 'nama_makanan', 'total_harga'];
    use HasFactory;
}
