@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>🥖 Selamat Datang di Bakpao Khas Madiun</h1>
        <p>Nikmati kelezatan bakpao autentik dengan resep tradisional terbaik</p>
        <a href="{{ route('frontend.produk') }}" class="btn btn-light btn-lg">
            <i class="fas fa-shopping-cart"></i> Lihat Produk Kami
        </a>
    </div>
</section>

<!-- Tentang Singkat -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h2 class="section-title mb-4">Tentang Kami</h2>
                <p class="text-muted fs-5">
                    <strong>Bakpao Khas Madiun</strong> adalah UMKM yang telah berdiri sejak tahun 2010. 
                    Kami berkomitmen untuk menyediakan bakpao berkualitas tinggi dengan bahan-bahan 
                    pilihan dan resep turun-temurun yang telah diuji oleh generasi keluarga kami.
                </p>
                <p class="text-muted fs-5">
                    Setiap produk kami dibuat dengan dedikasi dan cinta, menggunakan bahan-bahan premium 
                    yang dipilih langsung dari supplier terpercaya. Kepuasan pelanggan adalah prioritas utama kami.
                </p>
                <a href="{{ route('tentang') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-arrow-right"></i> Pelajari Selengkapnya
                </a>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/400x400?text=Bakpao+Khas+Madiun" alt="Tentang" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Produk Unggulan -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">✨ Produk Unggulan Kami</h2>
        <div class="row">
            @forelse($produks as $produk)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/produk/' . $produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama_produk }}" onerror="this.src='https://via.placeholder.com/300x250?text=Produk'">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($produk->deskripsi, 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h6 text-primary mb-0">
                                Rp {{ number_format($produk->harga, 0, ',', '.') }}
                            </span>
                            <span class="badge bg-success">Stok: {{ $produk->stok }}</span>
                        </div>
                        <div class="mt-3">
                            <a href="https://wa.me/6281234567890?text=Saya%20ingin%20pesan%20{{ urlencode($produk->nama_produk) }}" 
                               class="btn btn-primary btn-sm w-100" target="_blank">
                                <i class="fab fa-whatsapp"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted fs-5">Belum ada produk yang tersedia</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('frontend.produk') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-list"></i> Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="display-4 text-primary fw-bold">{{ \App\Models\Produk::count() }}</div>
                <p class="text-muted fs-5">Jenis Produk</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="display-4 text-primary fw-bold">14+</div>
                <p class="text-muted fs-5">Tahun Berpengalaman</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="display-4 text-primary fw-bold">1000+</div>
                <p class="text-muted fs-5">Pelanggan Puas</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="display-4 text-primary fw-bold">100%</div>
                <p class="text-muted fs-5">Kualitas Terjamin</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>💌 Hubungi Kami Sekarang</h2>
        <p class="lead mb-4">Tertarik dengan produk kami? Hubungi kami untuk pemesanan atau informasi lebih lanjut</p>
        <a href="{{ route('kontak.create') }}" class="btn btn-light btn-lg">
            <i class="fas fa-envelope"></i> Kirim Pesan
        </a>
        <a href="https://wa.me/6281234567890" class="btn btn-light btn-lg ms-2" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
    </div>
</section>
@endsection
