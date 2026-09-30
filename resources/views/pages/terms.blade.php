<x-layouts.app :title="'Syarat & Ketentuan - GunaDigital'">
    <div class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-8" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <span class="text-slate-300">/</span>
                <span class="text-slate-400">Legal & Kebijakan</span>
                <span class="text-slate-300">/</span>
                <span class="text-blue-600 font-semibold">Syarat & Ketentuan</span>
            </nav>

            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-blue-500/20 mb-10 relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/15 text-blue-100 border border-white/20">
                        <span>Dokumen Resmi</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black tracking-tight">
                        Syarat & Ketentuan Layanan
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base max-w-2xl leading-relaxed">
                        Harap membaca syarat dan ketentuan berikut dengan saksama sebelum menggunakan layanan pembuatan website dan undangan digital di GunaDigital.
                    </p>
                    <div class="pt-2 flex items-center gap-4 text-xs text-blue-200">
                        <span>Terakhir diperbarui: {{ date('d F Y') }}</span>
                        <span>•</span>
                        <span>Berlaku efektif untuk seluruh klien</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm space-y-10 text-slate-700 leading-relaxed">

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">1</span>
                        <h2 class="text-xl font-bold text-slate-900">Ketentuan Umum & Definisi</h2>
                    </div>
                    <p class="text-sm pl-11 text-slate-600">
                        Dengan memesan atau menggunakan layanan yang disediakan oleh <strong class="text-slate-900">GunaDigital</strong> ("Kami"), Klien ("Anda") dianggap telah membaca, memahami, dan menyetujui seluruh isi dari Syarat dan Ketentuan ini. Perjanjian ini mengatur hak dan kewajiban kedua belah pihak selama proses kerjasama berlangsung.
                    </p>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">2</span>
                        <h2 class="text-xl font-bold text-slate-900">Ruang Lingkup Layanan</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>GunaDigital menyediakan solusi digital kreatif yang mencakup namun tidak terbatas pada:</p>
                        <ul class="list-disc pl-5 space-y-1.5">
                            <li><strong>Jasa Pembuatan Website:</strong> Landing Page, Company Profile Bisnis/UMKM, Toko Online / Katalog, Web Klinik, Web Portofolio, dan Custom Web Portal.</li>
                            <li><strong>Jasa Undangan Digital:</strong> Undangan Pernikahan Online (Wedding Website), Khitanan, Ulang Tahun, dan Undangan Formal Acara.</li>
                            <li><strong>Layanan Pendukung:</strong> Konfigurasi domain kustom, instalasi sertifikat SSL, hosting setup, integrasi form WhatsApp, Google Maps, dan SEO dasar.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">3</span>
                        <h2 class="text-xl font-bold text-slate-900">Alur Pemesanan & Sistem Pembayaran</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li><strong>Uang Muka (DP):</strong> Pengerjaan proyek website dimulai setelah Klien membayar uang muka (DP) minimal sebesar 50% dari total nilai paket yang disepakati, atau pembayaran penuh (100%) untuk paket undangan digital tertentu.</li>
                            <li><strong>Pelunasan:</strong> Sisa pembayaran wajib diselesaikan setelah website selesai dikerjakan dan diverifikasi dalam tahap preview, sebelum kredensial akses penuh atau serah terima domain live dilakukan.</li>
                            <li><strong>Metode Pembayaran:</strong> Pembayaran hanya sah jika ditransfer ke rekening bank resmi / QRIS yang diinstruksikan oleh tim admin resmi GunaDigital.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">4</span>
                        <h2 class="text-xl font-bold text-slate-900">Proses Pengerjaan & Ketentuan Revisi</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li><strong>Kelengkapan Materi:</strong> Estimasi waktu pengerjaan (timeline) mulai dihitung sejak Klien menyerahkan seluruh materi (foto, logo, teks profil, nomor kontak, jadwal acara) secara lengkap.</li>
                            <li><strong>Garansi Revisi:</strong> Revisi mencakup perbaikan teks typo, penggantian foto/galeri, penyesuaian tata letak kecil, atau penyesuaian warna. Revisi tidak mencakup perubahan konsep drastis di luar paket atau penambahan fitur di luar kesepakatan awal.</li>
                            <li><strong>Masa Aktif Revisi:</strong> Klien diberikan waktu hingga 14 hari kalender setelah demo pertama dikirimkan untuk mengajukan daftar revisi.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">5</span>
                        <h2 class="text-xl font-bold text-slate-900">Hak Cipta & Larangan Konten</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>Klien menjamin bahwa seluruh materi yang diberikan adalah milik sah Klien dan tidak melanggar hak cipta pihak ketiga.</p>
                        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 text-xs sm:text-sm">
                            <strong>Pemberitahuan Penting:</strong> GunaDigital menolak keras dan berhak membatalkan pengerjaan proyek yang mengandung konten judi online, pornografi, penipuan/phishing, investasi bodong, ujaran kebencian (SARA), atau materi terlarang lainnya sesuai hukum Republik Indonesia.
                        </div>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">6</span>
                        <h2 class="text-xl font-bold text-slate-900">Hubungi Kami Mengenai Syarat Ini</h2>
                    </div>
                    <p class="text-sm pl-11 text-slate-600">
                        Jika Anda memiliki pertanyaan mengenai Syarat & Ketentuan Layanan ini, silakan hubungi tim kami melalui halaman <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:underline">Halaman Kontak</a> atau chat WhatsApp resmi kami di <a href="https://wa.me/6281234567890" target="_blank" class="text-emerald-600 font-bold hover:underline">+62 812-3456-7890</a>.
                    </p>
                </section>

            </div>

        </div>
    </div>
</x-layouts.app>
