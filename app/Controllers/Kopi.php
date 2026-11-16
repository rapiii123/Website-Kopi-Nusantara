<?php

namespace App\Controllers;

/**
 * Controller Utama: Kopi
 * 
 * Mengelola antarmuka katalog statis "Kopi Nusantara" tanpa menggunakan database.
 * Seluruh data produk, teks analisis praktikum, dan referensi multimedia dikirim
 * secara terstruktur ke View (app/Views/kopi_view.php).
 */
class Kopi extends BaseController
{
    public function index(): string
    {
        // Data statis yang dikirimkan ke View
        $data = [
            'metaTitle' => 'Kopi Nusantara | Eksplorasi Cita Rasa Warisan Bumi Pertiwi',
            'brand'     => [
                'name'    => 'Kopi Nusantara',
                'tagline' => 'Mahakarya Aroma Tradisi Kepulauan Indonesia',
            ],
            // Data Hero Section
            'hero'      => [
                'badge'       => 'Katalog Warisan Nusantara',
                'titleMain'   => 'Mahakarya Aroma Kopi Nusantara',
                'subtitle'    => 'Menyajikan keagungan cita rasa biji kopi pilihan nusantara dengan teknik sangrai presisi demi pengalaman minum kopi yang berkesan.',
                'typingWords' => 'Tradisi • Kualitas • Rasa Otentik',
            ],
            // Data Galeri 3 Produk Unggulan (Komponen Gambar)
            'products'  => [
                [
                    'id'          => 1,
                    'name'        => 'Arabika Aceh Gayo',
                    'origin'      => 'Dataran Tinggi Gayo, Aceh',
                    'altitude'    => '1.400 - 1.600 mdpl',
                    'process'     => 'Semi-Washed',
                    'roastLevel'  => 'Medium Roast',
                    'notes'       => 'Aroma rempah tajam, sentuhan dark chocolate, rasa manis karamel, serta tingkat keasaman (acidity) bersih dan seimbang.',
                    'image'       => 'assets/img/kopi-gayo.jpg',
                    'price'       => 'Rp 85.000',
                    'unit'        => '/ 250 gram',
                    'badge'       => 'Best Seller'
                ],
                [
                    'id'          => 2,
                    'name'        => 'Toraja Kalosi Specialty',
                    'origin'      => 'Tana Toraja, Sulawesi Selatan',
                    'altitude'    => '1.500 - 1.800 mdpl',
                    'process'     => 'Full Washed',
                    'roastLevel'  => 'Medium Dark Roast',
                    'notes'       => 'Body tebal yang kaya, aroma floral harum, sentuhan rempah herbal khas Celebes, serta aftertaste manis berkepanjangan.',
                    'image'       => 'assets/img/kopi-toraja.jpg',
                    'price'       => 'Rp 95.000',
                    'unit'        => '/ 250 gram',
                    'badge'       => 'Specialty Grade'
                ],
                [
                    'id'          => 3,
                    'name'        => 'Bali Kintamani Arabica',
                    'origin'      => 'Lereng Gunung Batur, Kintamani, Bali',
                    'altitude'    => '1.200 - 1.500 mdpl',
                    'process'     => 'Natural Process',
                    'roastLevel'  => 'Light-Medium Roast',
                    'notes'       => 'Keasaman segar mirip citrus orange, body lembut, rasa manis alami buah tropis, dan aroma bunga yang semerbak.',
                    'image'       => 'assets/img/kopi-kintamani.jpg',
                    'price'       => 'Rp 90.000',
                    'unit'        => '/ 250 gram',
                    'badge'       => 'Single Origin'
                ],
            ],
            // Data Komponen Multimedia (Audio & Video)
            'multimedia' => [
                'audio' => [
                    'title'       => 'Podcast Aroma & Suasana Kedai Tradisional',
                    'curator'     => 'Disusun oleh Barista & Roaster Nusantara',
                    'duration'    => 'Stereo Audio • 44.1 kHz',
                    'file'        => 'assets/audio/podcast-kopi.mp3',
                    'description' => 'Nikmati rekaman suara backsound dan dialog edukasi mengenai filosofi biji kopi lokal, metode pemetikan buah ceri merah, dan alunan ketenangan saat menyeduh secangkir kopi.'
                ],
                'video' => [
                    'title'       => 'Dokumenter: Seni Menemukan Harmoni Rasa Kopi',
                    'resolution'  => 'Full HD 1080p • Cinematic Showcase',
                    'file'        => 'assets/video/video-kopi.mp4',
                    'description' => 'Tonton tayangan dokumenter singkat yang memperlihatkan visualisasi pemrosesan biji kopi pilihan, proses roasting bertemperatur terkontrol, hingga ritual manual brew V60.'
                ]
            ]
        ];

        return view('kopi_view', $data);
    }
}
