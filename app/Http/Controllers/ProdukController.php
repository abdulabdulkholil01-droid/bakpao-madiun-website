<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * Controller untuk mengelola Produk
 */
class ProdukController extends Controller
{
    /**
     * Tampilkan daftar semua produk
     */
    public function index(): View
    {
        $produks = Produk::paginate(12);
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Tampilkan form untuk membuat produk baru
     */
    public function create(): View
    {
        return view('admin.produk.create');
    }

    /**
     * Simpan produk baru ke database
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/produk'), $nama_gambar);
            $validated['gambar'] = $nama_gambar;
        }

        // Buat produk baru
        Produk::create($validated);

        return redirect()->route('produk.index')
                        ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail produk
     */
    public function show(Produk $produk): View
    {
        return view('admin.produk.show', compact('produk'));
    }

    /**
     * Tampilkan form untuk mengedit produk
     */
    public function edit(Produk $produk): View
    {
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update produk ke database
     */
    public function update(Request $request, Produk $produk): RedirectResponse
    {
        // Validasi data
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($produk->gambar && file_exists(public_path('images/produk/' . $produk->gambar))) {
                unlink(public_path('images/produk/' . $produk->gambar));
            }
            
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/produk'), $nama_gambar);
            $validated['gambar'] = $nama_gambar;
        }

        // Update produk
        $produk->update($validated);

        return redirect()->route('produk.index')
                        ->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Hapus produk dari database
     */
    public function destroy(Produk $produk): RedirectResponse
    {
        // Hapus gambar
        if ($produk->gambar && file_exists(public_path('images/produk/' . $produk->gambar))) {
            unlink(public_path('images/produk/' . $produk->gambar));
        }
        
        $produk->delete();

        return redirect()->route('produk.index')
                        ->with('success', 'Produk berhasil dihapus!');
    }
}
