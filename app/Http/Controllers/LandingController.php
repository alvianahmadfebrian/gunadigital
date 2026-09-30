<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $stats = [
            ['value' => '350+', 'label' => 'Proyek Selesai', 'sub' => 'Website & Undangan'],
            ['value' => '99.8%', 'label' => 'Kepuasan Klien', 'sub' => 'Review Bintang 5'],
            ['value' => '24-48 Jam', 'label' => 'Pengerjaan Kilat', 'sub' => 'Untuk Paket Tertentu'],
            ['value' => '100%', 'label' => 'Garansi Revisi', 'sub' => 'Hingga Sesuai Ekspektasi'],
        ];

        $services = [
            [
                'id' => 'web-dev',
                'category' => 'website',
                'badge' => 'Website Bisnis',
                'icon' => 'globe',
                'title' => 'Pembuatan Website Profesional & Toko Online',
                'description' => 'Tingkatkan kredibilitas bisnis Anda dengan website modern, loading secepat kilat, SEO-friendly, dan desain responsif di semua perangkat.',
                'features' => [
                    'Company Profile Korporat & UMKM',
                    'Landing Page Iklan Berkonversi Tinggi',
                    'Toko Online / E-Commerce dengan Payment Gateway',
                    'Kustom Desain Unik (Bukan Template Murahan)',
                    'Integrasi WhatsApp, Google Maps, & Analitik',
                    'Optimasi SEO & Kecepatan Google PageSpeed 90+',
                ],
                'price_start' => 'Rp 499.000',
                'color' => 'indigo',
            ],
            [
                'id' => 'digital-invitation',
                'category' => 'undangan',
                'badge' => 'Undangan Digital',
                'icon' => 'heart-handshake',
                'title' => 'Undangan Digital Interaktif & Eksklusif',
                'description' => 'Bagikan momen berharga pernikahan, khitanan, atau acara spesial dengan undangan digital elegan, musik romantis, RSVP WhatsApp, dan amplop digital.',
                'features' => [
                    'Undangan Pernikahan (Wedding Website) Elegan & Islami',
                    'Konfirmasi Kehadiran (RSVP) & Ucapan Tamu Realtime',
                    'Hitung Mundur Acara (Countdown Timer)',
                    'Integrasi Google Maps & Navigasi Lokasi Langsung',
                    'Amplop Digital via QRIS, Bank Transfer, & E-Wallet',
                    'Background Music, Foto Galeri, & Video Sinematik',
                ],
                'price_start' => 'Rp 99.000',
                'color' => 'pink',
            ],
        ];

        $portfolios = [
            [
                'id' => 1,
                'title' => 'Proats Music Center - Catalog Store',
                'category' => 'website',
                'tag' => 'E-Commerce & Digital Catalog',
                'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
                'description' => 'Platform katalog produk & instrumen musik digital modern dengan navigasi kategori terstruktur, showcase produk lengkap, dan integrasi pemesanan WhatsApp instan.',
                'link' => 'https://catalog.proatsmusiccenter.com/',
                'badge_color' => 'blue',
            ],
            [
                'id' => 2,
                'title' => 'Proats Music Center - Official Web',
                'category' => 'website',
                'tag' => 'Company Profile & Studio',
                'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=80',
                'description' => 'Website company profile resmi pusat alat musik, studio, dan training center dengan informasi layanan komprehensif, galeri kegiatan, dan konsultasi interaktif.',
                'link' => 'https://proatsmusiccenter.com/',
                'badge_color' => 'indigo',
            ],
            [
                'id' => 3,
                'title' => 'E-Voters.id - Online E-Voting System',
                'category' => 'website',
                'tag' => 'Web App & E-Voting Platform',
                'image' => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?auto=format&fit=crop&w=800&q=80',
                'description' => 'Platform aplikasi voting & pemilihan daring berbasis web dengan sistem verifikasi pemilih terpercaya, rekapitulasi data transparan, dan antarmuka responsif.',
                'link' => 'https://e-voters.id/',
                'badge_color' => 'purple',
            ],
            [
                'id' => 4,
                'title' => 'The Wedding of Rama & Shinta',
                'category' => 'undangan',
                'tag' => 'Undangan Rustic Gold',
                'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80',
                'description' => 'Tema rustic elegan dengan aksen champagne gold, pemutar lagu otomatis, amplop digital QRIS, dan fitur RSVP langsung ke WhatsApp.',
                'link' => '#',
                'badge_color' => 'rose',
            ],
            [
                'id' => 5,
                'title' => 'The Royal Wedding of Dimas & Citra',
                'category' => 'undangan',
                'tag' => 'Undangan Modern Luxury',
                'image' => 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80',
                'description' => 'Konsep royal luxury dark-emerald berbalut ornamen emas, galeri foto grid sinematik, dan petunjuk rute Google Maps.',
                'link' => '#',
                'badge_color' => 'amber',
            ],
            [
                'id' => 6,
                'title' => 'Walimatul Khitan of Rayyan',
                'category' => 'undangan',
                'tag' => 'Undangan Acara Khitan',
                'image' => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=800&q=80',
                'description' => 'Undangan digital ceria bernuansa Islami modern untuk syukuran khitanan keluarga dengan doa ucapan buku tamu interaktif.',
                'link' => '#',
                'badge_color' => 'cyan',
            ],
        ];

        $packages = [
            'website' => [
                [
                    'name' => 'Landing Page Express',
                    'price' => 'Rp 499.000',
                    'period' => 'sekali bayar',
                    'popular' => false,
                    'description' => 'Sangat pas untuk promosi produk tunggal, UMKM pemula, atau event promosi berdurasi tertentu.',
                    'features' => [
                        '1 Halaman Panjang (Single Page Modern)',
                        'Mobile Responsive 100%',
                        'Integrasi Tombol WhatsApp & Media Sosial',
                        'Gratis Subdomain / Hubungkan Domain Anda',
                        'Pengerjaan Cepat 2-3 Hari Kerja',
                        'Garansi 2x Revisi Desain',
                    ],
                    'cta' => 'Pilih Paket Express',
                ],
                [
                    'name' => 'Business Pro',
                    'price' => 'Rp 999.000',
                    'period' => 'sekali bayar',
                    'popular' => true,
                    'badge' => 'Paling Diminati',
                    'description' => 'Pilihan utama bisnis, kantor hukum, konsultan, klinik, dan perusahaan yang butuh reputasi profesional.',
                    'features' => [
                        'Hingga 5 Halaman Lengkap (Home, About, Layanan, Galeri, Kontak)',
                        'Gratis Domain .com / .id (1 Tahun)',
                        'Gratis Cloud Hosting Cepat & Aman (1 Tahun)',
                        'Gratis Email Bisnis (info@bisnisanda.com)',
                        'Optimasi SEO Basic Google Indexing',
                        'Integrasi Google Maps & WhatsApp Form',
                        'Garansi Revisi Sepuasnya Selama Pembuatan',
                        'Panduan & Konsultasi Pengelolaan',
                    ],
                    'cta' => 'Pilih Paket Bisnis',
                ],
                [
                    'name' => 'Toko Online & Custom Web',
                    'price' => 'Rp 1.899.000',
                    'period' => 'sekali bayar',
                    'popular' => false,
                    'description' => 'Sistem e-commerce atau portal web custom dengan pengelolaan produk, transaksi, dan integrasi kurir.',
                    'features' => [
                        'Katalog Produk Tanpa Batas',
                        'Sistem Keranjang Belanja & Checkout WhatsApp / Gateway',
                        'Gratis Domain .com / .id & Hosting Premium (1 Tahun)',
                        'Dashboard Kelola Produk & Pesanan Mandiri',
                        'Optimasi Kecepatan & Keamanan SSL',
                        'Pengerjaan 7-14 Hari Kerja',
                        'Prioritas Support 24/7 Selamanya',
                    ],
                    'cta' => 'Pilih Paket Toko Online',
                ],
            ],
            'undangan' => [
                [
                    'name' => 'Paket Silver / Lite',
                    'price' => 'Rp 99.000',
                    'period' => 'masa aktif 6 bulan',
                    'popular' => false,
                    'description' => 'Solusi hemat & praktis untuk membagikan undangan pernikahan secara cepat tanpa ribet.',
                    'features' => [
                        'Pilihan Desain Template Elegan',
                        'Navigasi Lokasi Google Maps',
                        'Hitung Mundur Acara (Countdown Timer)',
                        'Kutipan Ayat / Doa Pernikahan',
                        'Masa Aktif 6 Bulan',
                        'Pengerjaan Kilat 1x24 Jam Selesai',
                    ],
                    'cta' => 'Pesan Undangan Silver',
                ],
                [
                    'name' => 'Paket Gold (Best Seller)',
                    'price' => 'Rp 179.000',
                    'period' => 'masa aktif 1 tahun',
                    'popular' => true,
                    'badge' => 'Paling Favorit',
                    'description' => 'Paket lengkap terpopuler dengan fitur musik latar romantis, amplop digital, dan RSVP buku tamu.',
                    'features' => [
                        'Fitur Nama Tamu Tanpa Batas (Bisa Custom per Tamu)',
                        'Background Musik Romantis (Bebas Pilih Lagu)',
                        'Konfirmasi Kehadiran (RSVP) via WhatsApp',
                        'Fitur Amplop Digital (QRIS, BCA, Mandiri, DANA, dll)',
                        'Galeri Hingga 10 Foto + 1 Video Sinematik',
                        'Buku Tamu & Ucapan Doa Interaktif',
                        'Integrasi Tambah ke Google Calendar',
                        'Masa Aktif 1 Tahun Penuh',
                    ],
                    'cta' => 'Pesan Undangan Gold',
                ],
                [
                    'name' => 'Paket Platinum Custom',
                    'price' => 'Rp 299.000',
                    'period' => 'masa aktif selamanya',
                    'popular' => false,
                    'description' => 'Undangan digital eksklusif dengan domain khusus nama pasangan (contoh: rama-shinta.com) & desain kustom.',
                    'features' => [
                        'Semua Fitur Paket Gold',
                        'Kustom Domain Sendiri (nama-pasangan.com)',
                        'Galeri Foto & Video Tanpa Batas',
                        'Fitur Love Story / Cerita Kisah Cinta',
                        'Desain Kustom Eksklusif (Tema Unik Sesuai Request)',
                        'Dukungan Kirim Massal WhatsApp Blast Helper',
                        'Masa Aktif Selamanya (Lifetime Archive)',
                        'Revisi Sepuasnya Sampai Hari H',
                    ],
                    'cta' => 'Pesan Paket Platinum',
                ],
            ],
        ];

        $testimonials = [
            [
                'name' => 'Ferry Pratama',
                'role' => 'Owner Kafe & Roastery, Bandung',
                'service' => 'Website Company Profile',
                'rating' => 5,
                'content' => 'Pelayanan sangat memuaskan! Website kafe saya selesai hanya dalam 3 hari, desainnya clean dan mewah. Banyak pelanggan baru datang setelah melihat website di Google Maps.',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'name' => 'dr. Rizky & Sarah, Sp.A',
                'role' => 'Pengantin, Jakarta Selatan',
                'service' => 'Undangan Pernikahan Digital Gold',
                'rating' => 5,
                'content' => 'Undangan web kami dipuji semua tamu undangan keluarga dan rekan sejawat! Lagunya menyentuh, amplop digital QRIS berfungsi sangat praktis, dan fitur sebar nama tamunya gampang banget digunakan.',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
            ],
            [
                'name' => 'Anisa Rahmawati',
                'role' => 'Founder Hijab Fashion Boutique',
                'service' => 'Toko Online E-Commerce',
                'rating' => 5,
                'content' => 'Sistem katalog dan checkout WhatsApp-nya bikin omzet naik 40%. Tim GunaDigital juga sabar banget membimbing saya yang gaptek sampai paham cara ganti banner promo sendiri!',
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
            ],
        ];

        $faqs = [
            [
                'q' => 'Berapa lama estimasi proses pengerjaan website dan undangan digital?',
                'a' => 'Untuk undangan digital, proses pengerjaan rata-rata selesai dalam 1x24 jam (paling lambat 48 jam) setelah data dan foto lengkap kami terima. Untuk landing page / website profil bisnis standar memerlukan 3-5 hari kerja, sedangkan toko online / custom berkisar antara 7-14 hari kerja.',
            ],
            [
                'q' => 'Apakah saya bisa menggunakan domain sendiri (seperti namatoko.com atau rama-shinta.com)?',
                'a' => 'Tentu saja! Untuk paket website Business Pro ke atas dan undangan digital paket Platinum sudah include nama domain custom (.com atau .id). Anda juga bisa menggunakan domain yang sudah Anda miliki sebelumnya.',
            ],
            [
                'q' => 'Materi apa saja yang harus saya siapkan sebelum mulai?',
                'a' => 'Untuk undangan digital: Nama lengkap & panggilan kedua mempelai, nama orang tua, tanggal/waktu akad & resepsi, lokasi Google Maps, foto-foto dokumentasi, nomor rekening/QRIS (jika pakai amplop digital), serta lagu favorit. Untuk website: Logo, profil singkat usaha, daftar layanan/produk, kontak WhatsApp, dan foto pendukung.',
            ],
            [
                'q' => 'Bagaimana jika setelah jadi ada kesalahan teks atau saya ingin revisi?',
                'a' => 'Kami memberikan garansi revisi! Anda dapat mengajukan revisi teks, pergantian foto, atau penyesuaian detail acara sampai hasil benar-benar sesuai dengan yang Anda harapkan.',
            ],
            [
                'q' => 'Bagaimana cara menyebarkan undangan digital ke tamu WhatsApp?',
                'a' => 'Kami menyediakan template teks sebar WhatsApp otomatis lengkap dengan link khusus yang dapat disisipkan nama masing-masing tamu secara otomatis (contoh: ".../to/Nama-Tamu"). Jadi undangan terasa sangat personal dan sopan.',
            ],
            [
                'q' => 'Bagaimana sistem pembayarannya?',
                'a' => 'Untuk undangan digital, pembayaran dapat dilakukan secara lunas di awal atau DP 50% dan pelunasan setelah link demo selesai direview. Untuk pembuatan website, DP minimal 50% di awal dan pelunasan setelah website online serta siap pakai.',
            ],
        ];

        return view('welcome', compact('stats', 'services', 'portfolios', 'packages', 'testimonials', 'faqs'));
    }
}
