<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'kategori_id',
        'stok',
        // tambahkan atribut lain yang diperlukan
    ];

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Tambahkan relasi atau metode lain yang diperlukan
}
