@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container py-5" style="margin-top: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4 text-center" style="color: #8B4513;">
                <i class="fas fa-envelope"></i> Hubungi Kami
            </h1>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-circle"></i> Terjadi Kesalahan!</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Form Kontak -->
            <div class="card shadow-lg mb-5">
                <div class="card-header" style="background-color: #8B4513; color: white;">
                    <h5 class="mb-0"><i class="fas fa-comment"></i> Kirim Pesan Kami</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('kontak.store') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama') }}" 
                                   placeholder="Masukkan nama lengkap Anda" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" 
                                       placeholder="nama@example.com" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="nomor_telepon" class="form-label fw-bold">Nomor Telepon <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control @error('nomor_telepon') is-invalid @enderror" 
                                       id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" 
                                       placeholder="081234567890" required>
                                @error('nomor_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label fw-bold">Pesan <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('pesan') is-invalid @enderror" 
                                      id="pesan" name="pesan" rows="6" 
                                      placeholder="Tuliskan pesan Anda di sini..." required>{{ old('pesan') }}</textarea>
                            <small class="text-muted">Minimal 10 karakter</small>
                            @error('pesan')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Informasi Kontak -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-left-primary h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #8B4513;">
                                <i class="fas fa-map-marker-alt text-primary"></i> Alamat
                            </h5>
                            <p class="card-text">
                                Jl. Madiun No. 123<br>
                                Kelurahan Madiun<br>
                                Kota Madiun, Jawa Timur<br>
                                Kode Pos: 63131
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-left-success h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #8B4513;">
                                <i class="fas fa-phone text-success"></i> Telepon
                            </h5>
                            <p class="card-text">
                                <strong>Telepon:</strong> (0351) 123-4567<br>
                                <strong>WhatsApp:</strong> 0812-3456-7890<br>
                                <strong>Jam:</strong> Senin - Jumat (08:00 - 18:00)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-left-info h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #8B4513;">
                                <i class="fas fa-envelope text-info"></i> Email
                            </h5>
                            <p class="card-text">
                                <strong>Email Utama:</strong><br>
                                info@bakpaomadiun.com<br>
                                <br>
                                <strong>Email Pesanan:</strong><br>
                                order@bakpaomadiun.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-left-warning h-100">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #8B4513;">
                                <i class="fas fa-clock text-warning"></i> Jam Operasional
                            </h5>
                            <p class="card-text">
                                <strong>Senin - Jumat:</strong> 08:00 - 18:00<br>
                                <strong>Sabtu:</strong> 09:00 - 17:00<br>
                                <strong>Minggu:</strong> Tutup<br>
                                <strong>Hari Libur:</strong> Tutup
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peta (Opsional) -->
            <div class="mt-5">
                <h4 class="mb-4" style="color: #8B4513;">
                    <i class="fas fa-map"></i> Lokasi Kami
                </h4>
                <div class="embed-responsive" style="position: relative; height: 400px; overflow: hidden; border-radius: 8px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7847254029247!2d111.51163752346902!3d-7.629079092376893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79f1e1e1e1e1e1%3A0x1e1e1e1e1e1e1e1e!2sJl.%20Madiun%20No.%20123!5e0!3m2!1sid!2sid!4v1234567890123" 
                            width="100%" height="100%" style="border: none; position: absolute; top: 0; left: 0;" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .border-left-primary {
        border-left: 4px solid #007bff !important;
    }

    .border-left-success {
        border-left: 4px solid #28a745 !important;
    }

    .border-left-info {
        border-left: 4px solid #17a2b8 !important;
    }

    .border-left-warning {
        border-left: 4px solid #ffc107 !important;
    }

    .form-control:focus {
        border-color: #8B4513;
        box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
    }
</style>
@endsection
