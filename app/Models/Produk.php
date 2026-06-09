<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model Produk
 * 
 * Mewakili tabel produk dalam database
 */
class Produk extends Model
{
    protected $table = 'produk';
    protected $timestamps = true;

    /**
     * Atribut yang dapat diisi secara massal
     */
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'gambar',
        'harga',
        'stok',
        'status',
    ];

    /**
     * Relasi satu ke banyak dengan Galeri
     */
    public function galeri(): HasMany
    {
        return $this->hasMany(Galeri::class);
    }
}
