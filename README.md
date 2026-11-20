# Website Portofolio & Blog Pribadi (AFL-1)

Website portofolio dan blog pribadi yang dibangun menggunakan framework **Laravel** dengan arsitektur **MVC (Model-View-Controller)**, **Blade Templating Engine**, dan **Bootstrap 5**. Proyek ini dikembangkan untuk memenuhi tugas Assessment for Learning 1 (AFL-1).

**Identitas Mahasiswa:**
- **Nama:** Frederich Irawan
- **NIM:** 1076012514001

---

## Fitur & Halaman Utama

- **Home (`/`):** Halaman beranda berisi foto profil, perkenalan singkat, serta tombol navigasi ke halaman Portofolio dan Tentang Saya.
- **About (`/about`):** Informasi mengenai latar belakang, keahlian, dan pengalaman.
- **Portfolio (`/portfolio`):** Menampilkan daftar karya/proyek menggunakan *reusable* Blade Component (`<x-portfolio-card />`) dengan tata letak grid responsif dan *cropping* gambar rasio 16:9.
- **Blog (`/blog`):** Daftar artikel dengan gambar, kategori, tanggal publikasi, dan ringkasan.
- **Detail Blog (`/blog/{id}`):** Halaman dinamis yang menampilkan detail lengkap setiap artikel berdasarkan parameter `id` pada rute, lengkap dengan penanganan *error* `404` jika ID tidak ditemukan.
- **Contact (`/contact`):** Halaman informasi dan formulir kontak.

---

## Teknologi yang Digunakan

- **Backend:** PHP & Laravel Framework
- **Frontend:** Laravel Blade, HTML5, CSS3, Bootstrap 5 (CDN)
- **Local Development:** Laravel Herd

---

## Cara Menjalankan Aplikasi

1. **Clone repository ini:**
   ```bash
   git clone [https://github.com/erichyuhu/Web-Develop-Laravel.git](https://github.com/erichyuhu/Web-Develop-Laravel.git)
   cd NAMA_REPO
   ```

2. **Install dependensi PHP:**
   ```bash
   composer install
   ```

3. **Salin file konfigurasi `.env`:**
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan server lokal:**
   ```bash
   php artisan serve
   ```
   Buka browser dan akses `http://127.0.0.1:8000` (atau akses langsung melalui domain lokal jika menggunakan Laravel Herd).

---

## Penggunaan AI

Dalam pengerjaan proyek ini, AI digunakan sebagai alat bantu (*coding assistant*) untuk:
- Membantu *debugging* dan memecahkan *error* pada Laravel (seperti *passing* data ke Blade Component, *routing* dinamis halaman detail blog, dan pemanggilan *path* aset lokal dengan helper `asset()`).
- Memberikan referensi penggunaan *class* Bootstrap 5 untuk tata letak responsif dan pemotongan rasio gambar (`ratio-16x9` dan `object-fit-cover`).

Seluruh integrasi kode, penyesuaian konten, aset gambar, serta pengujian akhir dilakukan dan diverifikasi secara mandiri.