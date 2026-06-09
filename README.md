# 🥖 Bakpao Khas Madiun - Website UMKM

Website profil perusahaan untuk Bakpao Khas Madiun UMKM yang dibangun menggunakan Laravel 11 dan Bootstrap 5.

## 📋 Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
- [Penggunaan](#penggunaan)
- [Struktur Direktori](#struktur-direktori)
- [Database](#database)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## ✨ Fitur

### Frontend
- 🏠 Halaman Beranda dengan showcase produk unggulan
- 📄 Halaman Tentang Kami dengan profil lengkap
- 🛍️ Halaman Produk dengan filter dan pencarian
- 🖼️ Halaman Galeri dengan foto-foto produk
- 📧 Halaman Kontak dengan formulir pengiriman pesan
- 📱 Responsive design untuk semua ukuran perangkat
- ♿ Aksesibilitas penuh

### Admin Dashboard
- 👤 Manajemen Produk (CRUD)
- 🖼️ Manajemen Galeri (CRUD)
- 📧 Manajemen Pesan Kontak
- 🔒 Autentikasi dan Authorization
- 📊 Dashboard dengan statistik

## 💻 Persyaratan Sistem

- PHP 8.3 atau lebih tinggi
- Composer
- Node.js 16+ dan npm
- MySQL 5.7+
- Git

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/abdulabdulkholil01-droid/bakpao-madiun-website.git
cd bakpao-madiun-website
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Konfigurasi Database
Edit file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bakpao_madiun
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan Migrasi & Seeder
```bash
php artisan migrate
php artisan db:seed
```

### 7. Build Assets
```bash
npm run build
```

## ⚙️ Konfigurasi

### Konfigurasi App
Ubah nama aplikasi di `.env`:
```env
APP_NAME="Bakpao Madiun"
APP_URL=http://localhost:8000
```

### Konfigurasi Email
Untuk mengirim email notifikasi, konfigurasi MAIL di `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS="noreply@bakpaomadiun.com"
```

## 📖 Penggunaan

### Menjalankan Development Server
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

### Menjalankan Vite untuk Development
```bash
npm run dev
```

### Build untuk Production
```bash
npm run build
php artisan migrate --force
```

### Akses Admin Dashboard
- URL: `http://localhost:8000/admin`
- Email: `admin@bakpao.test`
- Password: `password`

## 📁 Struktur Direktori

```
bakpao-madiun-website/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProdukController.php
│   │   │   ├── GaleriController.php
│   │   │   └── KontakController.php
│   │   └── Middleware/
│   └── Models/
│       ├── Produk.php
│       ├── Galeri.php
│       ├── Kontak.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── 2024_01_02_000002_create_produk_table.php
│   │   ├── 2024_01_03_000003_create_galeri_table.php
│   │   └── 2024_01_04_000004_create_kontak_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── frontend/
│       │   ├── index.blade.php
│       │   ├── tentang.blade.php
│       │   ├── kontak.blade.php
│       │   └── produk/
│       └── admin/
│           ├── dashboard.blade.php
│           ├── produk/
│           ├── galeri/
│           └── kontak/
├── routes/
│   └── web.php
├── .env.example
├── composer.json
├── package.json
├── vite.config.js
├── tailwind.config.js
└── README.md
```

## 🗄️ Database

### Tabel Produk
```sql
CREATE TABLE produk (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama_produk VARCHAR(255) NOT NULL,
    deskripsi TEXT NOT NULL,
    gambar VARCHAR(255) NULL,
    harga DECIMAL(12, 2) NOT NULL,
    stok INT DEFAULT 0,
    status ENUM('aktif', 'tidak_aktif') DEFAULT 'aktif',
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Tabel Galeri
```sql
CREATE TABLE galeri (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT NULL,
    gambar VARCHAR(255) NOT NULL,
    produk_id BIGINT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (produk_id) REFERENCES produk(id) ON DELETE CASCADE
);
```

### Tabel Kontak
```sql
CREATE TABLE kontak (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    nomor_telepon VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    status ENUM('baru', 'dibaca', 'dibalas') DEFAULT 'baru',
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## 🔒 Keamanan

- Gunakan `.env` file untuk menyimpan informasi sensitif
- Jangan commit `.env` ke repository
- Selalu update dependencies secara berkala
- Gunakan HTTPS di production
- Aktifkan CORS hanya untuk domain yang dipercaya

## 📝 Model Relasi

### Produk dan Galeri
```php
// Produk memiliki banyak Galeri
$produk->galeri()->get();

// Galeri milik satu Produk
$galeri->produk;
```

## 🛠️ Troubleshooting

### Storage Link Error
```bash
php artisan storage:link
```

### Cache Error
```bash
php artisan cache:clear
php artisan config:clear
```

### Database Error
```bash
php artisan migrate:fresh --seed
```

## 📞 Dukungan

Untuk dukungan teknis, hubungi:
- Email: support@bakpaomadiun.com
- WhatsApp: 0812-3456-7890
- Website: https://bakpaomadiun.com

## 👨‍💻 Developer

- **Abdul Abdulkholil** - Developer Backend & Frontend
- Email: abdul.abdulkholil01@gmail.com
- GitHub: [@abdulabdulkholil01-droid](https://github.com/abdulabdulkholil01-droid)

## 📄 Lisensi

Project ini dilisensikan di bawah lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan Anda (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 🙏 Terima Kasih

Terima kasih telah mengunjungi dan mendukung Bakpao Khas Madiun!

---

**Dibuat dengan ❤️ oleh Tim Bakpao Madiun | © 2024 Bakpao Khas Madiun UMKM**
