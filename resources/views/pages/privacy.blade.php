<x-layouts.app :title="'Kebijakan Privasi - GunaDigital'">
    <div class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-8" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <span class="text-slate-300">/</span>
                <span class="text-slate-400">Legal & Kebijakan</span>
                <span class="text-slate-300">/</span>
                <span class="text-blue-600 font-semibold">Kebijakan Privasi</span>
            </nav>

            <div class="bg-gradient-to-br from-blue-700 to-indigo-900 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-blue-500/20 mb-10 relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-64 h-64 bg-sky-400/20 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/15 text-blue-100 border border-white/20">
                        <span>Perlindungan Data Pribadi</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black tracking-tight">
                        Kebijakan Privasi (Privacy Policy)
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base max-w-2xl leading-relaxed">
                        Kami sangat menghargai dan berkomitmen penuh untuk melindungi privasi serta keamanan data pribadi seluruh klien, pasangan pengantin, dan pengunjung website kami.
                    </p>
                    <div class="pt-2 flex items-center gap-4 text-xs text-blue-200">
                        <span>Terakhir diperbarui: {{ date('d F Y') }}</span>
                        <span>•</span>
                        <span>Standar Enkripsi SSL 256-bit</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-sm space-y-10 text-slate-700 leading-relaxed">

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">1</span>
                        <h2 class="text-xl font-bold text-slate-900">Data Pribadi yang Kami Kumpulkan</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>Untuk memproses pembuatan website dan undangan digital, kami mengumpulkan data yang Anda berikan secara sukarela, antara lain:</p>
                        <ul class="list-disc pl-5 space-y-1.5">
                            <li><strong>Informasi Kontak:</strong> Nama lengkap, nomor telepon / WhatsApp, alamat email, dan nama instansi/usaha.</li>
                            <li><strong>Materi Proyek Website:</strong> Logo perusahaan, profil usaha, daftar produk/jasa, alamat kantor fisik, dan link media sosial.</li>
                            <li><strong>Materi Undangan Digital:</strong> Nama kedua mempelai/tuan rumah, nama orang tua, tanggal dan lokasi akad/resepsi, galeri foto dokumentasi, serta nomor rekening/QRIS untuk amplop digital.</li>
                            <li><strong>Data Teknis Otomatis:</strong> Alamat IP, jenis browser, dan preferensi navigasi saat mengunjungi situs kami untuk peningkatan performa.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">2</span>
                        <h2 class="text-xl font-bold text-slate-900">Tujuan Penggunaan Data</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>Informasi yang terkumpul digunakan secara bertanggung jawab semata-mata untuk:</p>
                        <ul class="list-disc pl-5 space-y-1.5">
                            <li>Memproses desain, pengerjaan kustom, dan publikasi website atau undangan digital Anda ke server online.</li>
                            <li>Mengirimkan update pengerjaan, link preview revisi, dan konfirmasi pembayaran.</li>
                            <li>Memberikan layanan bantuan teknis (customer support) dan perpanjangan domain/hosting tahunan jika relevan.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">3</span>
                        <h2 class="text-xl font-bold text-slate-900">Keamanan & Kerahasiaan Data</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>
                            Kami menerapkan protokol keamanan standar industri termasuk sertifikat enkripsi SSL (Secure Sockets Layer), firewall server, dan pembatasan akses ketat. Kami <strong class="text-slate-900">TIDAK AKAN PERNAH</strong> menjual, menyewakan, atau membagikan data pribadi Anda kepada pihak ketiga untuk kepentingan iklan spam tanpa persetujuan Anda.
                        </p>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">4</span>
                        <h2 class="text-xl font-bold text-slate-900">Hak Klien atas Data</h2>
                    </div>
                    <div class="text-sm pl-11 space-y-3 text-slate-600">
                        <p>Klien memiliki hak penuh untuk:</p>
                        <ul class="list-disc pl-5 space-y-1.5">
                            <li>Meminta pembaharuan atau perbaikan data yang tidak akurat.</li>
                            <li>Meminta penonaktifan atau penghapusan permanen halaman undangan digital setelah acara selesai.</li>
                            <li>Menyembunyikan informasi sensitif tertentu (seperti nomor rekening pribadi) dari publikasi publik.</li>
                        </ul>
                    </div>
                </section>

                <section class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">5</span>
                        <h2 class="text-xl font-bold text-slate-900">Pertanyaan Terkait Privasi</h2>
                    </div>
                    <p class="text-sm pl-11 text-slate-600">
                        Untuk pertanyaan atau permintaan terkait perlindungan privasi data Anda, silakan hubungi tim kami melalui email <a href="mailto:privacy@gunadigital.id" class="text-blue-600 font-bold hover:underline">privacy@gunadigital.id</a> atau kunjungi <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:underline">Halaman Kontak</a> kami.
                    </p>
                </section>

            </div>

        </div>
    </div>
</x-layouts.app>
