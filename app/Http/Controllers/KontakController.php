<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * Controller untuk mengelola Kontak
 */
class KontakController extends Controller
{
    /**
     * Tampilkan daftar semua kontak di admin
     */
    public function index(): View
    {
        $kontaks = Kontak::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }

    /**
     * Tampilkan form kontak di frontend
     */
    public function create(): View
    {
        return view('frontend.kontak');
    }

    /**
     * Simpan kontak baru ke database
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'nomor_telepon' => 'required|string|max:20',
            'pesan' => 'required|string|min:10',
        ]);

        // Buat kontak baru
        Kontak::create($validated);

        return redirect()->back()
                        ->with('success', 'Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
    }

    /**
     * Tampilkan detail kontak
     */
    public function show(Kontak $kontak): View
    {
        // Update status menjadi dibaca
        $kontak->update(['status' => 'dibaca']);
        return view('admin.kontak.show', compact('kontak'));
    }

    /**
     * Hapus kontak dari database
     */
    public function destroy(Kontak $kontak): RedirectResponse
    {
        $kontak->delete();

        return redirect()->route('kontak.index')
                        ->with('success', 'Kontak berhasil dihapus!');
    }
}
