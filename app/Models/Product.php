<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Kolom nama produk
        'harga', // Kolom harga produk
        'stock', // Kolom stok produk
        'category_id'
    ];

}
