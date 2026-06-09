<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Kontak
 * 
 * Mewakili tabel kontak dalam database
 */
class Kontak extends Model
{
    protected $table = 'kontak';
    protected $timestamps = true;

    /**
     * Atribut yang dapat diisi secara massal
     */
    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'pesan',
        'status',
    ];
}
