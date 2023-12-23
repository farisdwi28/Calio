<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        // Add 'id' to allow mass assignment
        'name',
        'description',
        'image',
        'harga',
        'stok',
        // Add other attributes as needed
    ];
}
