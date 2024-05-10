<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'image',
        'nama',
        'kategori',
        'beli',
        'jual',
        'deskripsi',
        'stok'
    ];
}
