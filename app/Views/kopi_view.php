<?php
/**
 * Inisialisasi variabel dari Controller (App\Controllers\Kopi)
 * Menghilangkan peringatan "Undefined variable" pada PHP Intelephense / IDE VS Code.
 * 
 * @var string $metaTitle
 * @var array  $brand
 * @var array  $hero
 * @var array  $products
 * @var array  $multimedia
 */
$metaTitle  = $metaTitle ?? 'Kopi Nusantara | Eksplorasi Cita Rasa Warisan Bumi Pertiwi';
$brand      = $brand ?? ['name' => 'Kopi Nusantara', 'tagline' => 'Mahakarya Aroma Tradisi Kepulauan Indonesia'];
$hero       = $hero ?? ['badge' => '', 'titleMain' => '', 'subtitle' => '', 'typingWords' => ''];
$products   = $products ?? [];
$multimedia = $multimedia ?? [
    'audio' => ['title' => '', 'curator' => '', 'duration' => '', 'file' => '', 'description' => ''],
    'video' => ['title' => '', 'resolution' => '', 'file' => '', 'description' => '']
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($metaTitle) ?></title>

    <!-- Google Fonts: Poppins (Heading) & Inter (Paragraf & Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Animate.css CDN (Untuk Efek Animasi Teks & Elemen) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom CSS Kopi Nusantara (Terpisah & Rapi) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

    <!-- ============================================================== -->
    <!-- KOMPONEN: NAVBAR NAVIGASI ELEGAN                               -->
    <!-- ============================================================== -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#hero">
                    <i class="bi bi-cup-hot-fill brand-icon"></i>
                    <span><?= esc($brand['name']) ?></span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero"><i class="bi bi-house-door me-1"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#analisis-teks"><i class="bi bi-file-earmark-text me-1"></i> Teks & Format</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeri"><i class="bi bi-images me-1"></i> Galeri Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#multimedia"><i class="bi bi-play-circle me-1"></i> Audio & Video</a>
                        </li>
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                            <a class="btn-gold" href="#galeri">
                                <i class="bi bi-bag-check"></i> Jelajahi Katalog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- ============================================================== -->
        <!-- KOMPONEN: HERO SECTION & ANIMASI TEKS                          -->
        <!-- Hierarki: H1 Utama + Animasi Animate.css + CSS Typing Effect    -->
        <!-- ============================================================== -->
        <section id="hero" class="hero-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Kolom Teks Hero & Animasi -->
                    <div class="col-lg-7">
                        <!-- Badge Animasi (Animate.css: fadeInDown) -->
                        <div class="animate__animated animate__fadeInDown">
                            <span class="section-badge">
                                <i class="bi bi-stars me-1"></i> <?= esc($hero['badge']) ?>
                            </span>
                        </div>

                        <!-- Heading Level 1 (H1) dengan Animasi fadeInDown & Gradasi Emas -->
                        <h1 class="animate__animated animate__fadeInDown animate__delay-1s fw-bolder mt-2 mb-3">
                            <span class="text-gold-gradient"><?= esc($hero['titleMain']) ?></span>
                        </h1>

                        <!-- Animasi Slide In Left: Menampilkan Tagline Typing Effect -->
                        <div class="animate__animated animate__slideInLeft animate__delay-1s mb-3">
                            <div class="typing-container">
                                <span class="fs-5 text-custom-cyan fw-semibold">
                                    <i class="bi bi-patch-check-fill me-2"></i><?= esc($hero['typingWords']) ?>
                                </span>
                            </div>
                        </div>

                        <!-- Paragraf Pengantar Hero -->
                        <p class="animate__animated animate__fadeInUp animate__delay-1s custom-paragraph mb-4 pe-lg-4">
                            <?= esc($hero['subtitle']) ?> Setiap tegukan adalah perayaan atas tanah vulkanis subur, curah hujan tropis, dan dedikasi luhur para petani kopi kepulauan Nusantara.
                        </p>

                        <!-- Tombol CTA dengan Hyperlink -->
                        <div class="animate__animated animate__fadeInUp animate__delay-2s d-flex flex-wrap gap-3">
                            <a href="#galeri" class="btn-gold">
                                <i class="bi bi-grid-3x3-gap-fill"></i> Lihat Koleksi Produk
                            </a>
                            <a href="#multimedia" class="btn-outline-gold">
                                <i class="bi bi-play-btn-fill"></i> Tonton & Dengarkan
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kartu Representatif Hero -->
                    <div class="col-lg-5 animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="hero-glow-card">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="audio-icon-box">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <div>
                                    <h3 class="h5 mb-0 text-white">Standar Kualitas Tertinggi</h3>
                                    <small class="text-custom-amber">100% Biji Kopi Asli Indonesia</small>
                                </div>
                            </div>
                            <p class="text-muted small mb-3">
                                Dikurasi langsung dari perkebunan dataran tinggi dengan metode petik merah pilihan untuk memastikan profil cita rasa maksimal.
                            </p>
                            <div class="d-flex justify-content-between text-center pt-3 border-top border-secondary border-opacity-25">
                                <div>
                                    <span class="d-block fw-bold fs-4 text-custom-amber">3+</span>
                                    <small class="text-muted">Origin Terkemuka</small>
                                </div>
                                <div>
                                    <span class="d-block fw-bold fs-4 text-custom-cyan">Grade 1</span>
                                    <small class="text-muted">Specialty Grade</small>
                                </div>
                                <div>
                                    <span class="d-block fw-bold fs-4 text-custom-emerald">100%</span>
                                    <small class="text-muted">Single Origin</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================== -->
        <!-- KOMPONEN TEKS (PERTEMUAN 1)                                    -->
        <!-- Memuat: Hierarki H2 & H3, Paragraf dengan Format Teks Lengkap  -->
        <!-- (strong, em, u, class warna), Daftar Berpoin (ul, li), Link (a)-->
        <!-- ============================================================== -->
        <section id="analisis-teks" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="section-badge">Pertemuan 1 • Analisis Praktikum</span>
                    <!-- Heading Level 2 (H2) -->
                    <h2 class="fw-bold">Eksplorasi Format Teks & Karakteristik Kopi</h2>
                    <p class="text-muted mx-auto" style="max-width: 650px;">
                        Implementasi lengkap elemen tipografi HTML5, format penekanan teks, daftar berpoin, dan tautan hiperteks interaktif.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Kolom 1: Format Teks Paragraf Lengkap -->
                    <div class="col-lg-7">
                        <div class="card-text-analysis h-100">
                            <!-- Heading Level 3 (H3) -->
                            <h3 class="h4 mb-3 text-white">
                                <i class="bi bi-journal-text text-custom-amber me-2"></i>Filosofi & Profil Seduhan Kopi
                            </h3>

                            <!-- Paragraf 1: Memuat Format Tebal (strong), Miring (em), Garis Bawah (u), dan Warna Teks CSS -->
                            <p class="custom-paragraph">
                                Kopi Indonesia bukan sekadar minuman penyemangat pagi, melainkan <strong>warisan budaya luhur</strong> yang sarat makna. Istilah <em>"Nusantara Coffee"</em> merujuk pada keberagaman varietas arabika dan robusta yang tumbuh di tanah vulkanik subur. Kualitas rasa kopi ditentukan oleh <u>ketinggian tanam di atas permukaan laut</u> serta ketelitian proses pasca-panen.
                            </p>

                            <!-- Paragraf 2: Memuat Variasi Warna Teks CSS Tambahan -->
                            <p class="custom-paragraph">
                                Dari segi cita rasa, biji kopi kita menawarkan spektrum aroma yang memukau: ada sensasi <span class="text-custom-amber">karamel manis legit</span> dari dataran tinggi Aceh, kesegaran buah <span class="text-custom-cyan">jeruk asam tropis (citrusy)</span> asal Kintamani Bali, hingga karakter herba dan rempah <span class="text-custom-emerald">aromatik rempah tanah (earthy notes)</span> yang menjadi ciri khas kopi Toraja Sulawesi. Seluruh kekayaan ini membuktikan bahwa rasa kopi nusantara memiliki kompleksitas tak tertandingi di panggung dunia.
                            </p>

                            <!-- Komponen Tautan / Hypertext (a href) -->
                            <div class="pt-3 border-top border-secondary border-opacity-25 mt-4 d-flex flex-wrap align-items-center justify-content-between gap-2">
                                <span class="small text-muted">Pelajari selengkapnya di basis pengetahuan:</span>
                                <a href="https://id.wikipedia.org/wiki/Kopi_di_Indonesia" target="_blank" rel="noopener noreferrer" class="custom-link-external">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Ensiklopedia Kopi Indonesia (Wikipedia)
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 2: Daftar Berpoin (ul dan li) -->
                    <div class="col-lg-5">
                        <div class="card-text-analysis h-100">
                            <!-- Heading Level 3 (H3) -->
                            <h3 class="h4 mb-3 text-white">
                                <i class="bi bi-list-check text-custom-amber me-2"></i>Pilar Keunggulan Mutu Kopi
                            </h3>

                            <p class="custom-paragraph mb-2">
                                Standar mutu yang kami terapkan untuk menjamin kesempurnaan setiap cangkir:
                            </p>

                            <!-- Daftar Berpoin (UL & LI) -->
                            <ul class="custom-bullet-list">
                                <li>
                                    <strong>Pemetikan Manual (Hand Picked):</strong> Hanya buah ceri merah matang sempurna (<em>optimal ripe cherries</em>) yang dipetik oleh para petani mitra.
                                </li>
                                <li>
                                    <strong>Penyeleksian Biji Tanpa Cacat (Zero Defect):</strong> Melalui tahap <u>sortir manual tiga lapis</u> untuk menyingkirkan biji berlubang atau pecah.
                                </li>
                                <li>
                                    <strong>Profil Sangrai Khusus (Artisan Roasting):</strong> Menggunakan mesin sangrai berteknologi modern dengan <span class="text-custom-amber">kurva pemanasan presisi</span>.
                                </li>
                                <li>
                                    <strong>Pengemasan Kedap Udara (One-Way Valve):</strong> Menjaga kesegaran senyawa aromatik dan mencegah oksidasi udara luar.
                                </li>
                            </ul>

                            <a href="#galeri" class="custom-link mt-2">
                                <span>Lihat Daftar Produk Unggulan</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================== -->
        <!-- KOMPONEN GAMBAR: GALERI 3 KARTU PRODUK                         -->
        <!-- Tag <img> mengarah ke folder lokal assets/img/                 -->
        <!-- ============================================================== -->
        <section id="galeri" class="py-5" style="background-color: rgba(11, 17, 32, 0.5);">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="section-badge">Koleksi Pilihan • Single Origin</span>
                    <!-- Heading Level 2 (H2) -->
                    <h2 class="fw-bold">Galeri Produk Kopi Nusantara</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">
                        Tiga varietas kopi primadona dari tiga pulau kepulauan Indonesia dengan pesona rasa yang otentik.
                    </p>
                </div>

                <div class="row g-4">
                    <?php foreach ($products as $item): ?>
                        <div class="col-md-6 col-lg-4">
                            <!-- Kartu Produk Galeri Gambar -->
                            <article class="product-card">
                                <!-- Wrapper Tag Gambar Lokal -->
                                <div class="product-image-wrapper">
                                    <img src="<?= base_url($item['image']) ?>" 
                                         alt="<?= esc($item['name']) ?>" 
                                         loading="lazy">
                                    <span class="product-badge">
                                        <i class="bi bi-tag-fill me-1"></i><?= esc($item['badge']) ?>
                                    </span>
                                </div>

                                <div class="product-body">
                                    <!-- Heading Level 3 (H3) untuk Judul Produk -->
                                    <h3 class="product-title"><?= esc($item['name']) ?></h3>
                                    
                                    <div class="product-origin">
                                        <i class="bi bi-geo-alt-fill text-custom-amber"></i>
                                        <span><?= esc($item['origin']) ?></span>
                                    </div>

                                    <div class="small text-muted mb-2">
                                        <i class="bi bi-cloud-snow me-1"></i> <strong>Ketinggian:</strong> <?= esc($item['altitude']) ?>
                                    </div>
                                    <div class="small text-muted mb-3">
                                        <i class="bi bi-gear-wide-connected me-1"></i> <strong>Proses:</strong> <?= esc($item['process']) ?> • <?= esc($item['roastLevel']) ?>
                                    </div>

                                    <p class="product-notes">
                                        <?= esc($item['notes']) ?>
                                    </p>

                                    <div class="product-footer">
                                        <div>
                                            <span class="product-price"><?= esc($item['price']) ?></span>
                                            <small class="text-muted d-block" style="font-size: 0.75rem;"><?= esc($item['unit']) ?></small>
                                        </div>
                                        <a href="#multimedia" class="btn btn-sm btn-outline-gold">
                                            <i class="bi bi-info-circle me-1"></i> Detail
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============================================================== -->
        <!-- KOMPONEN MULTIMEDIA: AUDIO & VIDEO                             -->
        <!-- Tag <audio controls> & <video controls> ke folder lokal        -->
        <!-- ============================================================== -->
        <section id="multimedia" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="section-badge">Multimedia Praktikum • Audio & Video</span>
                    <!-- Heading Level 2 (H2) -->
                    <h2 class="fw-bold">Showcase Multimedia Kopi Nusantara</h2>
                    <p class="text-muted mx-auto" style="max-width: 650px;">
                        Integrasi pemutar audio dan video HTML5 menggunakan berkas lokal untuk analisis multimedia interaktif.
                    </p>
                </div>

                <div class="row g-4 align-items-stretch">
                    <!-- Kolom Komponen Audio (HTML5 <audio controls>) -->
                    <div class="col-lg-6">
                        <div class="media-card">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="audio-icon-box">
                                    <i class="bi bi-mic-fill"></i>
                                </div>
                                <div>
                                    <span class="badge bg-warning text-dark mb-1">HTML5 Audio Player</span>
                                    <!-- Heading Level 3 (H3) -->
                                    <h3 class="h4 mb-0 text-white"><?= esc($multimedia['audio']['title']) ?></h3>
                                </div>
                            </div>

                            <p class="custom-paragraph mb-3">
                                <?= esc($multimedia['audio']['description']) ?>
                            </p>

                            <div class="small text-muted mb-3 d-flex flex-wrap gap-3">
                                <span><i class="bi bi-person-fill text-custom-amber me-1"></i> <?= esc($multimedia['audio']['curator']) ?></span>
                                <span><i class="bi bi-music-note-beamed text-custom-cyan me-1"></i> <?= esc($multimedia['audio']['duration']) ?></span>
                            </div>

                            <!-- Pemutar Audio HTML5 Lokal -->
                            <div class="audio-player-wrapper">
                                <label class="small text-custom-amber fw-semibold mb-2 d-block">
                                    <i class="bi bi-volume-up-fill me-1"></i> Pemutar Berkas Audio Lokal (assets/audio/):
                                </label>
                                <audio controls preload="metadata">
                                    <source src="<?= base_url($multimedia['audio']['file']) ?>" type="audio/mpeg">
                                    Browser Anda tidak mendukung elemen pemutar audio HTML5.
                                </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Komponen Video (HTML5 <video controls>) -->
                    <div class="col-lg-6">
                        <div class="media-card">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="audio-icon-box" style="color: var(--text-custom-cyan); background: rgba(56, 189, 248, 0.15); border-color: rgba(56, 189, 248, 0.3);">
                                    <i class="bi bi-film"></i>
                                </div>
                                <div>
                                    <span class="badge bg-info text-dark mb-1">HTML5 Video Player</span>
                                    <!-- Heading Level 3 (H3) -->
                                    <h3 class="h4 mb-0 text-white"><?= esc($multimedia['video']['title']) ?></h3>
                                </div>
                            </div>

                            <p class="custom-paragraph mb-3">
                                <?= esc($multimedia['video']['description']) ?>
                            </p>

                            <div class="small text-muted mb-3 d-flex flex-wrap gap-3">
                                <span><i class="bi bi-camera-reels text-custom-cyan me-1"></i> Format: MP4 H.264</span>
                                <span><i class="bi bi-display text-custom-amber me-1"></i> <?= esc($multimedia['video']['resolution']) ?></span>
                            </div>

                            <!-- Pemutar Video HTML5 Lokal -->
                            <div class="video-player-wrapper">
                                <video controls preload="metadata" poster="<?= base_url('assets/img/kopi-gayo.jpg') ?>">
                                    <source src="<?= base_url($multimedia['video']['file']) ?>" type="video/mp4">
                                    Browser Anda tidak mendukung elemen pemutar video HTML5.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ============================================================== -->
    <!-- FOOTER WEBSITE                                                 -->
    <!-- ============================================================== -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-cup-hot-fill fs-3 text-custom-amber"></i>
                        <h4 class="h5 mb-0 text-white fw-bold"><?= esc($brand['name']) ?></h4>
                    </div>
                    <p class="small text-muted mb-3 pe-lg-4">
                        <?= esc($brand['tagline']) ?>. Proyek implementasi antarmuka web modern dengan arsitektur CodeIgniter 4 (CI4), Bootstrap 5, dan spesifikasi multimedia praktikum.
                    </p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <h5>Navigasi Praktikum</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#hero"><i class="bi bi-chevron-right me-1"></i> Beranda & Heading H1</a></li>
                        <li class="mb-2"><a href="#analisis-teks"><i class="bi bi-chevron-right me-1"></i> Teks Tebal, Miring & Warna</a></li>
                        <li class="mb-2"><a href="#analisis-teks"><i class="bi bi-chevron-right me-1"></i> Daftar Berpoin (UL & LI)</a></li>
                        <li class="mb-2"><a href="#galeri"><i class="bi bi-chevron-right me-1"></i> Galeri 3 Kartu Gambar</a></li>
                        <li class="mb-2"><a href="#multimedia"><i class="bi bi-chevron-right me-1"></i> Pemutar Audio & Video</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-4">
                    <h5>Spesifikasi Teknis</h5>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-1"><strong>Framework:</strong> CodeIgniter v4.7.6</li>
                        <li class="mb-1"><strong>Mode:</strong> Static MVC (Controller & View)</li>
                        <li class="mb-1"><strong>CSS Library:</strong> Bootstrap 5.3.3 + Custom CSS</li>
                        <li class="mb-1"><strong>Animations:</strong> Animate.css + CSS Keyframes</li>
                        <li class="mb-1"><strong>Typography:</strong> Google Fonts (Poppins & Inter)</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">
                    &copy; <?= date('Y') ?> <strong><?= esc($brand['name']) ?></strong>. Dibuat untuk pemenuhan analisis modul praktikum pemrograman web.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
