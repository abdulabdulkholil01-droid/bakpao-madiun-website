<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan database seeders
     */
    public function run(): void
    {
        // Buat user admin default
        User::create([
            'nama' => 'Admin Bakpao',
            'email' => 'admin@bakpao.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Buat data produk sample (opsional)
        \App\Models\Produk::create([
            'nama_produk' => 'Bakpao Daging Babi',
            'deskripsi' => 'Bakpao lezat dengan isi daging babi pilihan, empuk dan gurih',
            'harga' => 25000,
            'stok' => 50,
            'status' => 'aktif',
        ]);

        \App\Models\Produk::create([
            'nama_produk' => 'Bakpao Ayam',
            'deskripsi' => 'Bakpao dengan isi daging ayam yang lembut dan berempah',
            'harga' => 20000,
            'stok' => 75,
            'status' => 'aktif',
        ]);

        \App\Models\Produk::create([
            'nama_produk' => 'Bakpao Kacang Merah',
            'deskripsi' => 'Bakpao vegetarian dengan isi kacang merah yang manis dan lembut',
            'harga' => 18000,
            'stok' => 60,
            'status' => 'aktif',
        ]);
    }
}
