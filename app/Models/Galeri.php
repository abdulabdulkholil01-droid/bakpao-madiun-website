<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Model Galeri
 * 
 * Mewakili tabel galeri dalam database
 */
class Galeri extends Model
{
    protected $table = 'galeri';
    protected $timestamps = true;

    /**
     * Atribut yang dapat diisi secara massal
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'produk_id',
    ];

    /**
     * Relasi banyak ke satu dengan Produk
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}
