<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * Controller untuk mengelola Galeri
 */
class GaleriController extends Controller
{
    /**
     * Tampilkan daftar semua galeri
     */
    public function index(): View
    {
        $galeris = Galeri::with('produk')->paginate(12);
        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Tampilkan form untuk membuat galeri baru
     */
    public function create(): View
    {
        $produks = Produk::all();
        return view('admin.galeri.create', compact('produks'));
    }

    /**
     * Simpan galeri baru ke database
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'produk_id' => 'nullable|exists:produk,id',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/galeri'), $nama_gambar);
            $validated['gambar'] = $nama_gambar;
        }

        // Buat galeri baru
        Galeri::create($validated);

        return redirect()->route('galeri.index')
                        ->with('success', 'Galeri berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail galeri
     */
    public function show(Galeri $galeri): View
    {
        return view('admin.galeri.show', compact('galeri'));
    }

    /**
     * Tampilkan form untuk mengedit galeri
     */
    public function edit(Galeri $galeri): View
    {
        $produks = Produk::all();
        return view('admin.galeri.edit', compact('galeri', 'produks'));
    }

    /**
     * Update galeri ke database
     */
    public function update(Request $request, Galeri $galeri): RedirectResponse
    {
        // Validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'produk_id' => 'nullable|exists:produk,id',
        ]);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($galeri->gambar && file_exists(public_path('images/galeri/' . $galeri->gambar))) {
                unlink(public_path('images/galeri/' . $galeri->gambar));
            }
            
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/galeri'), $nama_gambar);
            $validated['gambar'] = $nama_gambar;
        }

        // Update galeri
        $galeri->update($validated);

        return redirect()->route('galeri.index')
                        ->with('success', 'Galeri berhasil diperbarui!');
    }

    /**
     * Hapus galeri dari database
     */
    public function destroy(Galeri $galeri): RedirectResponse
    {
        // Hapus gambar
        if ($galeri->gambar && file_exists(public_path('images/galeri/' . $galeri->gambar))) {
            unlink(public_path('images/galeri/' . $galeri->gambar));
        }
        
        $galeri->delete();

        return redirect()->route('galeri.index')
                        ->with('success', 'Galeri berhasil dihapus!');
    }
}
