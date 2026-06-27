<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama_klien',
        'layanan',
        'jumlah',
        'file_referensi',
        'harga_awal',
        'nama_kolom',
    ];
}