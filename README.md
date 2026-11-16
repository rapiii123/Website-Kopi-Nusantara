# ☕ Kopi Nusantara - Website Portofolio & Katalog (CodeIgniter 4)

Proyek website portofolio dan katalog interaktif bertema **"Kopi Nusantara"** yang dibangun menggunakan framework **CodeIgniter 4 (CI4)** tanpa database (statis berbasis arsitektur Controller & View). Website ini dirancang dengan gaya modern **Dark Navy & Luxury Amber Gold**, serta memuat pemenuhan modul praktikum pemrograman web dan multimedia secara lengkap.

---

## 🎨 Spesifikasi Desain & Tampilan
- **Skema Warna:** Dark Navy (`#0F172A`), Slate Card (`#1E293B`), Amber/Gold Accent (`#F59E0B`), teks kontras tinggi (`#F8FAFC`, `#CBD5E1`).
- **Tipografi Google Fonts:** Kombinasi **Poppins** (Headings `h1`-`h6`) dan **Inter** (Body/Paragraf).
- **CSS Framework:** Bootstrap 5.3 (via CDN) + Custom CSS terstruktur (`public/assets/css/style.css`).
- **Animasi:** Integrasi **Animate.css** (`animate__fadeInDown`, `animate__slideInLeft`, dll.) dan efek murni CSS (`@keyframes typing`).

---

## 📋 Fitur & Komponen Multimedia Praktikum

1. **Komponen Teks (Analisis Praktikum):**
   - **Hierarki Heading:** Penggunaan semantik `<h1>` pada Hero, `<h2>` pada Section, dan `<h3>` pada Sub-modul & Kartu Produk.
   - **Format Teks Lengkap:** Paragraf memuat format tebal (`<strong>`), miring (`<em>`), garis bawah (`<u>`), serta pewarnaan teks khusus dengan class CSS (`.text-custom-amber`, `.text-custom-cyan`, `.text-custom-emerald`).
   - **Daftar Berpoin:** `<ul class="custom-bullet-list">` dan `<li>` dengan bullet kustom ikon biji kopi ☕.
   - **Tautan/Hypertext:** Tautan internal anchor navigasi (`#galeri`, `#multimedia`) dan tautan eksternal (`<a href="..." target="_blank">`).
   - **Animasi Teks:** Efek animasi teks Animate.css serta CSS Typing Effect pada tagline Hero.

2. **Komponen Gambar:**
   - Galeri 3 kartu produk kopi unggulan nusantara (Arabika Aceh Gayo, Toraja Kalosi, dan Bali Kintamani) menggunakan tag `<img>` yang merujuk ke folder lokal `assets/img/`.

3. **Komponen Audio:**
   - Pemutar audio/podcast menggunakan tag HTML5 `<audio controls>` yang merujuk ke folder lokal `assets/audio/podcast-kopi.mp3`.

4. **Komponen Video:**
   - Pemutar video dokumenter menggunakan tag HTML5 `<video controls>` yang merujuk ke folder lokal `assets/video/video-kopi.mp4`.

---

## 📁 Struktur Folder Utama
```text
Kopi Nusantara/
├── app/
│   ├── Config/
│   │   ├── App.php             # Konfigurasi baseURL dan indexPage
│   │   └── Routes.php          # Routing ke Kopi::index
│   ├── Controllers/
│   │   └── Kopi.php            # Controller utama pengelola data katalog
│   └── Views/
│       └── kopi_view.php       # View HTML5 semantik & seluruh komponen praktikum
├── public/
│   ├── assets/
│   │   ├── audio/              # File audio podcast/backsound (MP3)
│   │   ├── css/                # Custom CSS (style.css)
│   │   ├── img/                # Gambar produk kopi lokal (JPG)
│   │   └── video/              # Video dokumenter lokal (MP4)
│   └── index.php
├── writable/
├── .env
├── spark
└── composer.json
```

---

## 🚀 Cara Menjalankan Proyek

1. **Prasyarat:**
   - PHP 8.2 atau lebih tinggi.
   - Ekstensi PHP `intl` dan `mbstring` aktif.

2. **Jalankan Development Server:**
   Buka terminal di root folder proyek, lalu jalankan:
   ```bash
   php spark serve
   ```

3. **Buka di Browser:**
   Akses alamat:
   ```
   http://localhost:8080
   ```
   atau
   ```
   http://localhost:8080/kopi
   ```
