<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\PricingPackage;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {

        if (Portfolio::count() === 0) {
            $portfolios = [
                [
                    'title' => 'Proats Music Center - Catalog Store',
                    'category' => 'website',
                    'tag' => 'E-Commerce & Digital Catalog',
                    'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Platform katalog produk & instrumen musik digital modern dengan navigasi kategori terstruktur, showcase produk lengkap, dan integrasi pemesanan WhatsApp instan.',
                    'link' => 'https://catalog.proatsmusiccenter.com/',
                    'badge_color' => 'blue',
                    'is_featured' => true,
                    'order' => 1,
                ],
                [
                    'title' => 'Proats Music Center - Official Web',
                    'category' => 'website',
                    'tag' => 'Company Profile & Studio',
                    'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Website company profile resmi pusat alat musik, studio, dan training center dengan informasi layanan komprehensif, galeri kegiatan, dan konsultasi interaktif.',
                    'link' => 'https://proatsmusiccenter.com/',
                    'badge_color' => 'indigo',
                    'is_featured' => true,
                    'order' => 2,
                ],
                [
                    'title' => 'E-Voters.id - Online E-Voting System',
                    'category' => 'website',
                    'tag' => 'Web App & E-Voting Platform',
                    'image' => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Platform aplikasi voting & pemilihan daring berbasis web dengan sistem verifikasi pemilih terpercaya, rekapitulasi data transparan, dan antarmuka responsif.',
                    'link' => 'https://e-voters.id/',
                    'badge_color' => 'purple',
                    'is_featured' => true,
                    'order' => 3,
                ],
                [
                    'title' => 'The Wedding of Rama & Shinta',
                    'category' => 'undangan',
                    'tag' => 'Undangan Rustic Gold',
                    'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Tema rustic elegan dengan aksen champagne gold, pemutar lagu otomatis, amplop digital QRIS, dan fitur RSVP langsung ke WhatsApp.',
                    'link' => '#',
                    'badge_color' => 'rose',
                    'is_featured' => true,
                    'order' => 4,
                ],
                [
                    'title' => 'The Royal Wedding of Dimas & Citra',
                    'category' => 'undangan',
                    'tag' => 'Undangan Modern Luxury',
                    'image' => 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Konsep royal luxury dark-emerald berbalut ornamen emas, galeri foto grid sinematik, dan petunjuk rute Google Maps.',
                    'link' => '#',
                    'badge_color' => 'amber',
                    'is_featured' => true,
                    'order' => 5,
                ],
                [
                    'title' => 'Walimatul Khitan of Rayyan',
                    'category' => 'undangan',
                    'tag' => 'Undangan Acara Khitan',
                    'image' => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=800&q=80',
                    'description' => 'Undangan digital ceria bernuansa Islami modern untuk syukuran khitanan keluarga dengan doa ucapan buku tamu interaktif.',
                    'link' => '#',
                    'badge_color' => 'cyan',
                    'is_featured' => true,
                    'order' => 6,
                ],
            ];

            foreach ($portfolios as $item) {
                Portfolio::create($item);
            }
        }

        if (PricingPackage::count() === 0) {
            $packages = [

                [
                    'category' => 'website',
                    'name' => 'Landing Page Express',
                    'price' => 'Rp 499.000',
                    'period' => 'sekali bayar',
                    'description' => 'Sangat pas untuk promosi produk tunggal, UMKM pemula, atau event promosi berdurasi tertentu.',
                    'features' => [
                        '1 Halaman Panjang (Single Page Modern)',
                        'Mobile Responsive 100%',
                        'Integrasi Tombol WhatsApp & Media Sosial',
                        'Gratis Subdomain / Hubungkan Domain Anda',
                        'Pengerjaan Cepat 2-3 Hari Kerja',
                        'Garansi 2x Revisi Desain',
                    ],
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pilih Paket Express',
                    'order' => 1,
                ],
                [
                    'category' => 'website',
                    'name' => 'Business Pro',
                    'price' => 'Rp 999.000',
                    'period' => 'sekali bayar',
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
                    'is_popular' => true,
                    'badge' => 'Paling Diminati',
                    'cta_text' => 'Pilih Paket Bisnis',
                    'order' => 2,
                ],
                [
                    'category' => 'website',
                    'name' => 'Toko Online & Custom Web',
                    'price' => 'Rp 1.899.000',
                    'period' => 'sekali bayar',
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
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pilih Paket Toko Online',
                    'order' => 3,
                ],

                [
                    'category' => 'undangan',
                    'name' => 'Paket Silver / Lite',
                    'price' => 'Rp 99.000',
                    'period' => 'masa aktif 6 bulan',
                    'description' => 'Solusi hemat & praktis untuk membagikan undangan pernikahan secara cepat tanpa ribet.',
                    'features' => [
                        'Pilihan Desain Template Elegan',
                        'Navigasi Lokasi Google Maps',
                        'Hitung Mundur Acara (Countdown Timer)',
                        'Kutipan Ayat / Doa Pernikahan',
                        'Masa Aktif 6 Bulan',
                        'Pengerjaan Kilat 1x24 Jam Selesai',
                    ],
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pesan Undangan Silver',
                    'order' => 4,
                ],
                [
                    'category' => 'undangan',
                    'name' => 'Paket Gold (Best Seller)',
                    'price' => 'Rp 179.000',
                    'period' => 'masa aktif 1 tahun',
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
                    'is_popular' => true,
                    'badge' => 'Paling Favorit',
                    'cta_text' => 'Pesan Undangan Gold',
                    'order' => 5,
                ],
                [
                    'category' => 'undangan',
                    'name' => 'Paket Platinum Custom',
                    'price' => 'Rp 299.000',
                    'period' => 'masa aktif selamanya',
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
                    'is_popular' => false,
                    'badge' => null,
                    'cta_text' => 'Pesan Paket Platinum',
                    'order' => 6,
                ],
            ];

            foreach ($packages as $pkg) {
                PricingPackage::create($pkg);
            }
        }

        if (Testimonial::count() === 0) {
            $testimonials = [
                [
                    'name' => 'Ferry Pratama',
                    'role' => 'Owner Kafe & Roastery, Bandung',
                    'service_name' => 'Website Company Profile',
                    'rating' => 5,
                    'content' => 'Pelayanan sangat memuaskan! Website kafe saya selesai hanya dalam 3 hari, desainnya clean dan mewah. Banyak pelanggan baru datang setelah melihat website di Google Maps.',
                    'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 1,
                ],
                [
                    'name' => 'dr. Rizky & Sarah, Sp.A',
                    'role' => 'Pengantin, Jakarta Selatan',
                    'service_name' => 'Undangan Pernikahan Digital Gold',
                    'rating' => 5,
                    'content' => 'Undangan web kami dipuji semua tamu undangan keluarga dan rekan sejawat! Lagunya menyentuh, amplop digital QRIS berfungsi sangat praktis, dan fitur sebar nama tamunya gampang banget digunakan.',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 2,
                ],
                [
                    'name' => 'Anisa Rahmawati',
                    'role' => 'Founder Hijab Fashion Boutique',
                    'service_name' => 'Toko Online E-Commerce',
                    'rating' => 5,
                    'content' => 'Sistem katalog dan checkout WhatsApp-nya bikin omzet naik 40%. Tim GunaDigital juga sabar banget membimbing saya yang gaptek sampai paham cara ganti banner promo sendiri!',
                    'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
                    'is_active' => true,
                    'order' => 3,
                ],
            ];

            foreach ($testimonials as $item) {
                Testimonial::create($item);
            }
        }

        if (Faq::count() === 0) {
            $faqs = [
                [
                    'question' => 'Berapa lama estimasi proses pengerjaan website dan undangan digital?',
                    'answer' => 'Untuk undangan digital, proses pengerjaan rata-rata selesai dalam 1x24 jam (paling lambat 48 jam) setelah data dan foto lengkap kami terima. Untuk landing page / website profil bisnis standar memerlukan 3-5 hari kerja, sedangkan toko online / custom berkisar antara 7-14 hari kerja.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 1,
                ],
                [
                    'question' => 'Apakah saya bisa menggunakan domain sendiri (seperti namatoko.com atau rama-shinta.com)?',
                    'answer' => 'Tentu saja! Untuk paket website Business Pro ke atas dan undangan digital paket Platinum sudah include nama domain custom (.com atau .id). Anda juga bisa menggunakan domain yang sudah Anda miliki sebelumnya.',
                    'category' => 'website',
                    'is_active' => true,
                    'order' => 2,
                ],
                [
                    'question' => 'Materi apa saja yang harus saya siapkan sebelum mulai?',
                    'answer' => 'Untuk undangan digital: Nama lengkap & panggilan kedua mempelai, nama orang tua, tanggal/waktu akad & resepsi, lokasi Google Maps, foto-foto dokumentasi, nomor rekening/QRIS (jika pakai amplop digital), serta lagu favorit. Untuk website: Logo, profil singkat usaha, daftar layanan/produk, kontak WhatsApp, dan foto pendukung.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 3,
                ],
                [
                    'question' => 'Bagaimana jika setelah jadi ada kesalahan teks atau saya ingin revisi?',
                    'answer' => 'Kami memberikan garansi revisi! Anda dapat mengajukan revisi teks, pergantian foto, atau penyesuaian detail acara sampai hasil benar-benar sesuai dengan yang Anda harapkan.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 4,
                ],
                [
                    'question' => 'Bagaimana cara menyebarkan undangan digital ke tamu WhatsApp?',
                    'answer' => 'Kami menyediakan template teks sebar WhatsApp otomatis lengkap dengan link khusus yang dapat disisipkan nama masing-masing tamu secara otomatis (contoh: ".../to/Nama-Tamu"). Jadi undangan terasa sangat personal dan sopan.',
                    'category' => 'undangan',
                    'is_active' => true,
                    'order' => 5,
                ],
                [
                    'question' => 'Bagaimana sistem pembayarannya?',
                    'answer' => 'Untuk undangan digital, pembayaran dapat dilakukan secara lunas di awal atau DP 50% dan pelunasan setelah link demo selesai direview. Untuk pembuatan website, DP minimal 50% di awal dan pelunasan setelah website online serta siap pakai.',
                    'category' => 'general',
                    'is_active' => true,
                    'order' => 6,
                ],
            ];

            foreach ($faqs as $item) {
                Faq::create($item);
            }
        }

        if (ContactMessage::count() === 0) {
            $messages = [
                [
                    'name' => 'Budi Santoso',
                    'phone' => '081234567890',
                    'email' => 'budi.santoso@gmail.com',
                    'service_type' => 'website',
                    'budget' => 'Rp 1.000.000 - Rp 2.500.000',
                    'message' => 'Halo admin, saya butuh website company profile untuk kantor kontraktor interior di Surabaya. Apakah bisa selesai dalam 5 hari?',
                    'status' => 'new',
                    'admin_notes' => 'Perlu follow-up via WhatsApp untuk detail portofolio.',
                ],
                [
                    'name' => 'Dinda & Gilang',
                    'phone' => '085712345678',
                    'email' => 'dindagilang.wedding@gmail.com',
                    'service_type' => 'undangan',
                    'budget' => 'Rp 179.000 (Paket Gold)',
                    'message' => 'Halo, kami tertarik dengan undangan tema Rustic Gold untuk pernikahan bulan depan di Bandung. Mau tanya pilihan lagu romantisnya apa saja ya?',
                    'status' => 'contacted',
                    'admin_notes' => 'Sudah dikirimkan daftar katalog lagu via WA.',
                ],
                [
                    'name' => 'Hendro Wijaya',
                    'phone' => '087890123456',
                    'email' => 'hendro@wijayagroup.co.id',
                    'service_type' => 'website',
                    'budget' => '> Rp 3.000.000',
                    'message' => 'Selamat siang, kami memerlukan sistem katalog toko online sparepart otomotif dengan 200+ produk. Mohon proposal penawarannya.',
                    'status' => 'in_progress',
                    'admin_notes' => 'Proposal dikirimkan, menunggu konfirmasi DP.',
                ],
            ];

            foreach ($messages as $msg) {
                ContactMessage::create($msg);
            }
        }

        $settings = [
            'site_name' => 'GunaDigital',
            'site_tagline' => 'Jasa Pembuatan Website & Undangan Digital Premium',
            'site_phone' => '0812-3456-7890',
            'site_whatsapp' => '6281234567890',
            'site_email' => 'halo@gunadigital.id',
            'site_address' => 'Jl. Boulevard Raya No. 88, Jakarta Selatan, DKI Jakarta 12950',
            'site_instagram' => 'https://instagram.com/gunadigital',
            'site_facebook' => 'https://facebook.com/gunadigital',
            'meta_description' => 'Jasa pembuatan website profesional, company profile, toko online, dan undangan digital pernikahan elegan terbaik di Indonesia.',
        ];

        foreach ($settings as $key => $val) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $val]);
        }
    }
}
