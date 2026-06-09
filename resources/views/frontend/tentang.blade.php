@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container py-5" style="margin-top: 70px;">
    <!-- Header Section -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="https://via.placeholder.com/500x400?text=Tentang+Bakpao+Madiun" alt="Tentang Kami" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 ps-md-4">
            <h1 style="color: #8B4513; font-weight: bold; font-size: 2.5rem;">
                Tentang Bakpao Khas Madiun
            </h1>
            <p class="lead text-muted">
                Kami adalah UMKM yang telah melayani masyarakat dengan dedikasi penuh sejak tahun 2010.
            </p>
            <p class="fs-5">
                Bakpao Khas Madiun didirikan dengan visi sederhana namun kuat: menyediakan makanan berkualitas tinggi 
                yang dapat dinikmati oleh semua kalangan masyarakat. Dengan bahan-bahan pilihan dan resep tradisional 
                yang telah teruji, kami berkomitmen untuk terus memberikan yang terbaik.
            </p>
        </div>
    </div>

    <hr class="my-5">

    <!-- Sejarah Section -->
    <section class="mb-5">
        <h2 style="color: #8B4513; font-weight: bold; margin-bottom: 30px;">
            📖 Sejarah Kami
        </h2>
        <div class="row">
            <div class="col-md-8">
                <p class="fs-5 text-muted">
                    <strong>Bakpao Khas Madiun</strong> bermula dari sebuah usaha kecil yang didirikan oleh 
                    <strong>Ibu Siti Nurhaliza</strong> pada tahun 2010. Awalnya, produksi hanya dilakukan di dapur rumah 
                    dengan tenaga kerja keluarga sendiri. Berkat dedikasi dan kualitas produk yang konsisten, 
                    usaha ini berkembang pesat dan mendapatkan kepercayaan dari masyarakat lokal.
                </p>
                <p class="fs-5 text-muted">
                    Pada tahun 2015, kami membuka toko pertama di pusat kota Madiun. Tahun 2018 menjadi titik balik 
                    yang signifikan ketika kami mulai memperluas pemasaran melalui media sosial dan e-commerce. 
                    Hingga saat ini, produk kami telah dikenal dan dipercaya oleh lebih dari 1000 pelanggan setia 
                    di berbagai wilayah.
                </p>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #f8f9fa;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">Milestone Kami</h5>
                        <ul class="list-unstyled">
                            <li><strong>2010</strong> - Didirikan</li>
                            <li><strong>2015</strong> - Buka Toko Pertama</li>
                            <li><strong>2018</strong> - Ekspansi Digital</li>
                            <li><strong>2020</strong> - Sertifikasi Halal</li>
                            <li><strong>2024</strong> - Kini</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <!-- Visi dan Misi -->
    <section class="mb-5">
        <h2 style="color: #8B4513; font-weight: bold; margin-bottom: 30px;">
            🎯 Visi & Misi Kami
        </h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-left-primary h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">
                            <i class="fas fa-eye text-primary"></i> Visi
                        </h5>
                        <p class="card-text">
                            Menjadi UMKM bakpao terkemuka di Indonesia yang dikenal dengan kualitas premium, 
                            inovasi berkelanjutan, dan kepedulian terhadap kepuasan pelanggan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-left-success h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">
                            <i class="fas fa-bullseye text-success"></i> Misi
                        </h5>
                        <p class="card-text">
                            <ul class="mb-0">
                                <li>Menghasilkan produk berkualitas tinggi</li>
                                <li>Memberikan layanan terbaik kepada pelanggan</li>
                                <li>Mempekerjakan tenaga kerja lokal</li>
                                <li>Menjaga kelestarian lingkungan</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <!-- Nilai Perusahaan -->
    <section class="mb-5">
        <h2 style="color: #8B4513; font-weight: bold; margin-bottom: 30px;">
            💎 Nilai-Nilai Kami
        </h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 style="color: #8B4513;">Kualitas</h5>
                    <p class="text-muted">
                        Setiap produk kami dibuat dengan standar kualitas tertinggi menggunakan bahan-bahan pilihan terbaik.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5 style="color: #8B4513;">Kepercayaan</h5>
                    <p class="text-muted">
                        Kami membangun hubungan jangka panjang dengan pelanggan melalui transparansi dan kejujuran.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5 style="color: #8B4513;">Keberlanjutan</h5>
                    <p class="text-muted">
                        Kami berkomitmen untuk menjaga lingkungan dan menggunakan praktik bisnis yang berkelanjutan.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5 style="color: #8B4513;">Dedikasi</h5>
                    <p class="text-muted">
                        Setiap anggota tim kami bekerja dengan sepenuh hati untuk memberikan yang terbaik.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 style="color: #8B4513;">Inovasi</h5>
                    <p class="text-muted">
                        Kami terus berinovasi untuk menghadirkan produk dan layanan yang semakin baik.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-center">
                    <div class="display-4" style="color: #D2691E; margin-bottom: 15px;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 style="color: #8B4513;">Komunitas</h5>
                    <p class="text-muted">
                        Kami percaya pada kekuatan komunitas dan pemberdayaan masyarakat lokal.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <!-- Tim -->
    <section class="mb-5">
        <h2 style="color: #8B4513; font-weight: bold; margin-bottom: 30px;">
            👥 Tim Kami
        </h2>
        <p class="lead text-muted mb-4">
            Bakpao Khas Madiun didukung oleh tim profesional yang berdedikasi tinggi dalam setiap aspek bisnis.
        </p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm">
                    <img src="https://via.placeholder.com/200x200?text=Ibu+Siti" class="card-img-top" alt="Pendiri">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">Ibu Siti Nurhaliza</h5>
                        <p class="text-muted">Pendiri & Direktur Utama</p>
                        <small class="text-muted">14+ Tahun Pengalaman</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm">
                    <img src="https://via.placeholder.com/200x200?text=Produksi" class="card-img-top" alt="Produksi">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">Tim Produksi</h5>
                        <p class="text-muted">Manajemen Kualitas</p>
                        <small class="text-muted">10+ Anggota Tim</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm">
                    <img src="https://via.placeholder.com/200x200?text=Penjualan" class="card-img-top" alt="Penjualan">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8B4513;">Tim Penjualan</h5>
                        <p class="text-muted">Customer Service</p>
                        <small class="text-muted">5+ Anggota Tim</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <!-- Sertifikasi -->
    <section class="mb-5">
        <h2 style="color: #8B4513; font-weight: bold; margin-bottom: 30px;">
            ✅ Sertifikasi & Penghargaan
        </h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #D2691E;">🏆</h3>
                        <h5 style="color: #8B4513;">Sertifikasi Halal</h5>
                        <p class="text-muted">Tersertifikasi Halal oleh LPPOM MUI</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #D2691E;">🎖️</h3>
                        <h5 style="color: #8B4513;">Penghargaan UMKM Terbaik</h5>
                        <p class="text-muted">Penghargaan dari Dinas Koperasi UKM 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #D2691E;">📜</h3>
                        <h5 style="color: #8B4513;">P-IRT</h5>
                        <p class="text-muted">Pangan Industri Rumah Tangga No. 2024.001</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 style="color: #D2691E;">🏅</h3>
                        <h5 style="color: #8B4513;">BPOM Terdaftar</h5>
                        <p class="text-muted">Terdaftar di BPOM RI Nomor 2024.001</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section rounded" style="background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);">
        <h3 class="mb-3">Tertarik Bekerja Sama?</h3>
        <p class="lead mb-4">
            Hubungi kami untuk peluang kerjasama dan distribusi produk Bakpao Khas Madiun
        </p>
        <a href="{{ route('kontak.create') }}" class="btn btn-light btn-lg">
            <i class="fas fa-envelope"></i> Hubungi Kami
        </a>
    </section>
</div>

<style>
    .border-left-primary {
        border-left: 4px solid #007bff !important;
    }

    .border-left-success {
        border-left: 4px solid #28a745 !important;
    }

    .cta-section {
        color: white;
        padding: 60px 40px;
        text-align: center;
    }
</style>
@endsection
