<x-layouts.app :title="'Tentang Kami - GunaDigital'">
    <div class="py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <nav class="flex items-center gap-2 text-xs font-medium text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <span class="text-slate-300">/</span>
                <span class="text-blue-600 font-semibold">Tentang Kami</span>
            </nav>

            <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-blue-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-blue-500/20 relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-72 h-72 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-sky-400/20 rounded-full blur-2xl pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/15 text-blue-100 border border-white/20">
                        <span>Mengenal Lebih Dekat GunaDigital</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Membangun Masa Depan Digital Bisnis & Momen Terbaik Anda
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base leading-relaxed">
                        Kami adalah studio kreatif digital yang berfokus menghadirkan website profesional, cepat, dan berestetika tinggi serta platform undangan digital interaktif kelas dunia untuk UMKM, korporat, dan individu di Indonesia.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                        <span>Tentang GunaDigital.id</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        Solusi Kreatif & Teknologi untuk Akselerasi Bisnis Anda
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        <strong class="text-slate-900 font-semibold">GunaDigital.id</strong> didirikan dengan semangat untuk memberikan kemudahan bagi setiap pelaku usaha, profesional, dan penyelenggara acara dalam memiliki kehadiran digital yang elegan dan berdaya saing tinggi.
                    </p>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        Kami menggabungkan seni desain modern, standar arsitektur pemrograman mutakhir, dan optimasi performa berkecepatan tinggi. Kami percaya bahwa website bukan sekadar brosur online, melainkan representasi kredibilitas, mesin konversi penjualan, dan identitas brand Anda di ranah digital.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-3">
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80">
                            <div class="text-2xl sm:text-3xl font-black text-blue-600">100+</div>
                            <div class="text-xs text-slate-500 font-medium mt-1">Proyek Terselesaikan</div>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80">
                            <div class="text-2xl sm:text-3xl font-black text-indigo-600">99.8%</div>
                            <div class="text-xs text-slate-500 font-medium mt-1">Tingkat Kepuasan</div>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 col-span-2 sm:col-span-1">
                            <div class="text-2xl sm:text-3xl font-black text-sky-600">24/7</div>
                            <div class="text-xs text-slate-500 font-medium mt-1">Dukungan Ramah</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative bg-gradient-to-tr from-blue-500/10 via-indigo-500/5 to-sky-500/10 p-6 sm:p-8 rounded-3xl border border-blue-100 shadow-sm space-y-6 overflow-hidden">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-3 border-b border-blue-100/80">
                            <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}" alt="GunaDigital" class="h-10 sm:h-11 w-auto max-w-[220px] object-contain">
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/90 border border-blue-100 text-[11px] font-semibold text-slate-600 shadow-xs w-fit">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                <span>Jakarta & Bandung, ID</span>
                            </div>
                        </div>

                        <div class="space-y-3.5 text-xs text-slate-600">
                            <div class="flex items-center gap-3 p-3 bg-white rounded-xl border border-slate-100 shadow-xs">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <strong class="text-slate-800 font-semibold block">Ultra Cepat & Responsif</strong>
                                    <span>Website ringan, mobile-friendly & SEO optimized</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 bg-white rounded-xl border border-slate-100 shadow-xs">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                </div>
                                <div>
                                    <strong class="text-slate-800 font-semibold block">Desain Kustom & Eksklusif</strong>
                                    <span>Tampilan modern disesuaikan dengan identitas brand</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 bg-white rounded-xl border border-slate-100 shadow-xs">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <strong class="text-slate-800 font-semibold block">Garansi Revisi & Transparansi</strong>
                                    <span>Biaya jelas di awal tanpa biaya tersembunyi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="text-center max-w-2xl mx-auto space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                        <span>Arah & Komitmen</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        Visi & Misi GunaDigital
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500">
                        Prinsip dasar dan tujuan mulia yang memandu setiap langkah karya dan layanan yang kami bangun.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

                    <div class="md:col-span-5 p-8 rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 text-white shadow-lg shadow-blue-500/15 flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-2xl bg-white/15 border border-white/20 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <span class="text-xs font-bold tracking-wider uppercase text-blue-200 block">Visi Utama</span>
                            <h3 class="text-xl sm:text-2xl font-bold leading-snug">
                                Menjadi Mitra Transformasi Digital Terdepan & Terpercaya di Indonesia
                            </h3>
                            <p class="text-xs sm:text-sm text-blue-100 leading-relaxed">
                                Membantu setiap individu, UMKM, dan institusi memiliki identitas serta aset digital kelas dunia yang estetis, terjangkau, dan berdampak nyata bagi pertumbuhan masa depan.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/15 text-xs text-blue-200 flex items-center gap-2 font-medium">
                            <span>Terpercaya</span>
                            <span>•</span>
                            <span>Inovatif</span>
                            <span>•</span>
                            <span>Berdampak</span>
                        </div>
                    </div>

                    <div class="md:col-span-7 p-8 rounded-3xl bg-white border border-slate-200 shadow-sm space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <span class="text-xs font-bold tracking-wider uppercase text-blue-600 block">Misi Kami</span>
                                <h3 class="text-xl font-bold text-slate-900">Langkah Nyata Mencapai Visi</h3>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-600">
                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                                <div class="w-7 h-7 rounded-lg bg-blue-100 text-blue-700 font-bold flex items-center justify-center text-xs">1</div>
                                <h4 class="font-bold text-slate-900 text-sm">Standar Visual & Kode Modern</h4>
                                <p class="text-slate-500 leading-relaxed">Menghadirkan website dengan standar UI/UX premium, kecepatan maksimal, dan responsif di seluruh perangkat.</p>
                            </div>

                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                                <div class="w-7 h-7 rounded-lg bg-indigo-100 text-indigo-700 font-bold flex items-center justify-center text-xs">2</div>
                                <h4 class="font-bold text-slate-900 text-sm">Pemberdayaan UMKM</h4>
                                <p class="text-slate-500 leading-relaxed">Menyediakan paket pembuatan website ramah anggaran tanpa mengorbankan kualitas & profesionalitas.</p>
                            </div>

                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                                <div class="w-7 h-7 rounded-lg bg-sky-100 text-sky-700 font-bold flex items-center justify-center text-xs">3</div>
                                <h4 class="font-bold text-slate-900 text-sm">Inovasi Undangan Digital</h4>
                                <p class="text-slate-500 leading-relaxed">Menciptakan pengalaman undangan pernikahan & acara digital interaktif yang elegan, praktis, dan ramah lingkungan.</p>
                            </div>

                            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                                <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 font-bold flex items-center justify-center text-xs">4</div>
                                <h4 class="font-bold text-slate-900 text-sm">Layanan Purnajual Terbaik</h4>
                                <p class="text-slate-500 leading-relaxed">Menjamin garansi revisi, pendampingan teknis langsung, dan konsultasi komunikatif yang menyenangkan.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pt-4">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                    <div class="lg:col-span-5 relative">

                        <div class="absolute -inset-3 bg-gradient-to-tr from-blue-600/20 via-indigo-500/15 to-sky-400/20 rounded-[40px] blur-2xl opacity-70 pointer-events-none"></div>

                        <div class="relative mx-auto max-w-sm sm:max-w-md lg:max-w-none rounded-[32px] overflow-hidden bg-slate-900 border border-slate-200/80 shadow-2xl shadow-blue-500/10 aspect-[4/5] group">
                            <img src="{{ asset('images/founder.jpg') }}?v={{ time() }}"
                                 alt="Alvian Ahmad Febrian - Founder & CEO GunaDigital"
                                 class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700">

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent opacity-50 pointer-events-none"></div>
                        </div>

                    </div>

                    <div class="lg:col-span-7 space-y-6">

                        <div class="space-y-2">
                            <span class="text-xs font-black uppercase tracking-[0.2em] text-amber-600 font-mono block">
                                MEET OUR FOUNDER
                            </span>
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
                                Alvian Ahmad Febrian
                            </h2>
                            <p class="text-sm sm:text-base font-semibold text-slate-500">
                                Founder & CEO GunaDigital.id
                            </p>
                        </div>

                        <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            <p>
                                <strong class="text-slate-900 font-semibold">Alvian Ahmad Febrian</strong> adalah seorang creativepreneur, web architect, dan tech enthusiast yang berdedikasi membangun ekosistem digital Indonesia yang inovatif, berestetika tinggi, dan mudah dijangkau oleh semua kalangan.
                            </p>
                            <p>
                                Berawal dari kegelisahannya melihat masih banyak pelaku usaha, UMKM, dan penyelenggara acara yang kesulitan memiliki website profesional serta undangan digital interaktif tanpa harus mengeluarkan biaya puluhan juta rupiah. Padahal, kehadiran digital yang kredibel dan responsif adalah poros utama akselerasi bisnis serta citra brand di era serba online saat ini.
                            </p>
                            <p>
                                Berangkat dari komitmen tersebut, Alvian mendirikan <strong class="text-slate-900 font-semibold">GunaDigital.id</strong> sebagai studio kreatif yang menggabungkan rekayasa kode modern, kecepatan akses optimal, desain eksklusif, serta garansi revisi transparan. Alvian percaya bahwa setiap bisnis dan individu berhak memiliki platform digital kelas dunia untuk berkembang dan meraih kesuksesan yang lebih hebat.
                            </p>
                        </div>

                        <div class="p-6 sm:p-7 rounded-2xl bg-amber-50/50 border border-amber-200/70 shadow-xs space-y-4 relative">

                            <div class="text-amber-500 text-3xl sm:text-4xl font-serif font-black leading-none select-none">
                                “
                            </div>

                            <p class="text-xs sm:text-sm font-semibold text-slate-800 italic leading-relaxed">
                                "GunaDigital.id didirikan untuk memberikan manfaat nyata bagi setiap insan dan bisnis. Supaya setiap dari kita mampu tampil profesional, percaya diri, dan melangkah lebih jauh di era digital."
                            </p>

                            <div class="pt-2 border-t border-amber-200/50">
                                <h4 class="text-xs font-bold text-slate-900">Alvian Ahmad Febrian</h4>
                                <p class="text-[11px] text-slate-500 font-medium">Founder & CEO GunaDigital.id</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-sky-600 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-blue-500/20 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
                <div class="space-y-3 max-w-xl text-center md:text-left relative z-10">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/20 text-white border border-white/30">
                        Mulai Kolaborasi
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black tracking-tight">
                        Siap Mewujudkan Website & Undangan Impian Anda?
                    </h3>
                    <p class="text-blue-100 text-xs sm:text-sm leading-relaxed">
                        Diskusikan ide proyek dan konsep bisnis Anda bersama tim kami. Kami siap memberikan saran terbaik dan penawaran transparan.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3 relative z-10 shrink-0">
                    <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20tertarik%20konsultasi%20pembuatan%20website"
                       target="_blank"
                       rel="noopener"
                       class="px-6 py-3.5 rounded-2xl bg-white hover:bg-slate-50 text-blue-600 font-bold text-sm shadow-md transition-all flex items-center gap-2">
                        <span>Konsultasi via WhatsApp</span>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-6 py-3.5 rounded-2xl bg-blue-700/50 hover:bg-blue-700 text-white font-bold text-sm border border-white/20 transition-all">
                        Hubungi Kontak Kami
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
