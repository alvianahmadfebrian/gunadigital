@props(['stats' => []])

<section class="relative pt-8 pb-20 lg:pt-16 lg:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">

                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-blue-200 bg-blue-50/90 shadow-sm">
                    <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-700">
                        Jasa Pembuatan Web & Undangan Digital #1
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15] text-slate-900">
                    Tingkatkan Kredibilitas Bisnis & Abadikan
                    <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-sky-600 bg-clip-text text-transparent">
                        Momen Spesial Anda
                    </span>
                </h1>

                <p class="text-lg sm:text-xl text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                    Layanan terpadu pembuatan <strong class="font-semibold text-slate-900">Website Profesional</strong> untuk UMKM & Perusahaan, serta <strong class="font-semibold text-slate-900">Undangan Digital Eksklusif</strong> dengan fitur interaktif (RSVP WhatsApp, Musik Latar, Amplop QRIS, & Countdown).
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#harga"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl font-bold text-white bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 hover:from-blue-500 hover:to-indigo-600 shadow-xl shadow-blue-600/25 hover:shadow-blue-600/40 hover:-translate-y-0.5 transition-all duration-300 group">
                        <span>Pilih Paket Website</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>

                    <a href="#layanan"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl font-bold text-blue-700 border border-blue-200 bg-white hover:bg-blue-50 shadow-sm hover:shadow hover:-translate-y-0.5 transition-all duration-300">
                        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span>Eksplor Undangan Digital</span>
                    </a>
                </div>

                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-y-2 gap-x-6 text-xs text-slate-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Pengerjaan Cepat 24-48 Jam</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Garansi Revisi Sepuasnya</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Bisa Pakai Domain Sendiri (.com / .id)</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative">

                <div class="absolute -inset-4 bg-gradient-to-r from-blue-400/20 via-sky-400/20 to-indigo-400/20 rounded-3xl blur-2xl opacity-70"></div>

                <div class="relative z-10 bg-white rounded-3xl p-4 sm:p-6 shadow-xl border border-blue-100">

                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-4">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-500 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
                            <span class="text-xs font-semibold text-slate-500 ml-2">Live Demo Preview</span>
                        </div>

                        <div class="flex p-1 bg-slate-100 rounded-xl text-xs font-semibold">
                            <button @click="invitationMockup.activeMode = 'invitation'"
                                    :class="invitationMockup.activeMode !== 'website' ? 'bg-white text-pink-600 shadow-sm' : 'text-slate-500 hover:text-slate-800'"
                                    class="px-3 py-1.5 rounded-lg transition-all flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-pink-500"></span>
                                <span>Undangan</span>
                            </button>
                            <button @click="invitationMockup.activeMode = 'website'"
                                    :class="invitationMockup.activeMode === 'website' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-500 hover:text-slate-800'"
                                    class="px-3 py-1.5 rounded-lg transition-all flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                <span>Website</span>
                            </button>
                        </div>
                    </div>

                    <div x-show="invitationMockup.activeMode !== 'website'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="relative mx-auto w-full max-w-[340px] bg-slate-900 rounded-[40px] p-3 shadow-2xl border-4 border-slate-800 ring-1 ring-black/10">

                        <div class="absolute top-5 left-1/2 -translate-x-1/2 w-24 h-4 bg-slate-950 rounded-full z-30 flex items-center justify-end px-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-800 border border-slate-700"></span>
                        </div>

                        <div class="relative bg-gradient-to-b from-[#1a1528] via-[#120e1e] to-[#090810] text-white rounded-[32px] overflow-hidden pt-7 pb-5 px-4 h-[490px] overflow-y-auto hide-scrollbar text-center border border-white/10">

                            <div class="flex items-center justify-between px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md mb-4 text-[11px] border border-white/15">
                                <div class="flex items-center gap-2">
                                    <span :class="invitationMockup.isPlayingAudio ? 'text-pink-400 animate-spin' : 'text-slate-400'">♫</span>
                                    <span class="text-slate-200 font-medium truncate max-w-[140px]" x-text="invitationMockup.isPlayingAudio ? 'Audio: A Thousand Years' : 'Musik Jeda'"></span>
                                </div>
                                <button @click="invitationMockup.toggleAudio()"
                                        type="button"
                                        class="px-2 py-0.5 rounded-md bg-pink-500/80 hover:bg-pink-500 text-[10px] font-bold text-white transition-colors">
                                    <span x-text="invitationMockup.isPlayingAudio ? 'Pause' : 'Play'"></span>
                                </button>
                            </div>

                            <div class="space-y-1 my-2">
                                <p class="text-[11px] uppercase tracking-widest text-pink-300/80 font-medium">The Wedding Celebration</p>
                                <h2 class="font-serif text-2xl font-bold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-pink-200 to-amber-100">
                                    Rama & Shinta
                                </h2>
                                <p class="text-[11px] text-slate-300">Sabtu, 24 Oktober 2026</p>
                            </div>

                            <div class="flex items-center justify-center my-2 opacity-75">
                                <span class="h-px w-10 bg-amber-400/40"></span>
                                <span class="mx-2 text-amber-300 text-xs">❦</span>
                                <span class="h-px w-10 bg-amber-400/40"></span>
                            </div>

                            <div class="my-3 p-2.5 rounded-xl bg-white/5 border border-pink-500/20 backdrop-blur-sm">
                                <span class="block text-[10px] text-slate-400">Kepada Yth. Bapak/Ibu/Saudara/i:</span>
                                <span class="block text-xs font-bold text-amber-200" x-text="invitationMockup.guestName"></span>
                            </div>

                            <div class="grid grid-cols-4 gap-1.5 my-3 text-center">
                                <div class="bg-white/10 rounded-lg p-1.5 border border-white/5">
                                    <span class="block text-sm font-extrabold text-pink-400" x-text="invitationMockup.days"></span>
                                    <span class="text-[9px] text-slate-400 uppercase">Hari</span>
                                </div>
                                <div class="bg-white/10 rounded-lg p-1.5 border border-white/5">
                                    <span class="block text-sm font-extrabold text-pink-400" x-text="invitationMockup.hours"></span>
                                    <span class="text-[9px] text-slate-400 uppercase">Jam</span>
                                </div>
                                <div class="bg-white/10 rounded-lg p-1.5 border border-white/5">
                                    <span class="block text-sm font-extrabold text-pink-400" x-text="invitationMockup.minutes"></span>
                                    <span class="text-[9px] text-slate-400 uppercase">Menit</span>
                                </div>
                                <div class="bg-white/10 rounded-lg p-1.5 border border-white/5">
                                    <span class="block text-sm font-extrabold text-pink-400" x-text="invitationMockup.seconds"></span>
                                    <span class="text-[9px] text-slate-400 uppercase">Detik</span>
                                </div>
                            </div>

                            <div class="my-4">
                                <button @click="invitationMockup.toggleEnvelope()"
                                        type="button"
                                        class="w-full py-2.5 px-4 rounded-xl font-bold text-xs bg-gradient-to-r from-pink-600 via-rose-600 to-amber-600 hover:from-pink-500 hover:to-amber-500 text-white shadow-lg shadow-pink-600/30 transition-all flex items-center justify-center gap-2">
                                    <span x-text="invitationMockup.isOpened ? 'Tutup Detail Acara' : 'Buka Undangan Lengkap'"></span>
                                </button>
                            </div>

                            <div x-show="invitationMockup.isOpened"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 class="space-y-3 pt-2 text-left text-xs border-t border-white/10">

                                <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                                    <div class="flex items-center gap-2 text-pink-300 font-semibold mb-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        <span>Akad & Resepsi</span>
                                    </div>
                                    <p class="text-slate-300 text-[11px]">Puri Ardhya Garini, Jl. Protokol Halim Perdanakusuma, Jakarta Timur</p>
                                    <div class="mt-2 flex gap-2">
                                        <button class="px-2 py-1 rounded bg-blue-600 hover:bg-blue-500 text-[10px] text-white">Buka Maps</button>
                                        <button class="px-2 py-1 rounded bg-white/10 hover:bg-white/20 text-[10px] text-white">+ Google Calendar</button>
                                    </div>
                                </div>

                                <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
                                    <div class="flex items-center gap-2 text-amber-300 font-semibold mb-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                                        <span>Amplop Digital (QRIS / Bank)</span>
                                    </div>
                                    <p class="text-slate-300 text-[11px]">BCA: 8820-1928-19 (a.n Rama Wijaya)</p>
                                    <button class="mt-1.5 text-[10px] px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 border border-amber-500/30">Salin Nomor Rekening</button>
                                </div>

                                <div class="p-2.5 rounded-xl bg-pink-500/10 border border-pink-500/20 text-center">
                                    <p class="text-[11px] text-pink-200 font-medium">✓ Konfirmasi Kehadiran RSVP WhatsApp Aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="invitationMockup.activeMode === 'website'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="relative mx-auto w-full bg-white rounded-2xl p-2.5 shadow-xl border border-slate-200">

                        <div class="flex items-center gap-2 px-3 py-2 bg-slate-50 rounded-lg text-xs mb-3 text-slate-500 border border-slate-200">
                            <span class="flex gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                            </span>
                            <div class="flex-1 text-center bg-white px-3 py-1 rounded-md text-[11px] text-slate-700 border border-slate-200 font-mono truncate">
                                https://bisnis-klien.com
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80"
                                 alt="Website Preview"
                                 class="w-full h-64 object-cover">

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-5">
                                <span class="inline-block px-2.5 py-0.5 rounded-md bg-blue-600 text-white font-bold text-[10px] w-max mb-1 shadow-sm">
                                    SEO SCORE 98/100
                                </span>
                                <h3 class="text-white font-bold text-base sm:text-lg">
                                    Modern Company Profile & High-Converting Landing Page
                                </h3>
                                <p class="text-slate-200 text-xs mt-1">
                                    Desain custom responsif, animasi interaktif, integrasi WhatsApp order, dan optimasi Google index.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-2 mt-3 text-center">
                            <div class="bg-blue-50 border border-blue-100 rounded-lg p-2">
                                <span class="block text-emerald-600 font-bold text-xs">0.8 Detik</span>
                                <span class="text-[10px] text-slate-600">Speed Loading</span>
                            </div>
                            <div class="bg-blue-50 border border-blue-100 rounded-lg p-2">
                                <span class="block text-blue-600 font-bold text-xs">100%</span>
                                <span class="text-[10px] text-slate-600">Mobile Responsive</span>
                            </div>
                            <div class="bg-blue-50 border border-blue-100 rounded-lg p-2">
                                <span class="block text-indigo-600 font-bold text-xs">Gratis SSL</span>
                                <span class="text-[10px] text-slate-600">Keamanan Data</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <span class="text-[11px] text-slate-500">
                            Klik tombol di preview untuk mencoba interaksi buka undangan & simulasi audio!
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-16 pt-10 border-t border-slate-200">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
                @foreach($stats as $stat)
                <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center relative group hover:border-blue-300 hover:shadow-md hover:-translate-y-1 transition-all">
                    <span class="block text-3xl sm:text-4xl font-black bg-gradient-to-r from-blue-600 via-indigo-600 to-sky-600 bg-clip-text text-transparent mb-1">
                        {{ $stat['value'] }}
                    </span>
                    <span class="block text-sm font-bold text-slate-800">
                        {{ $stat['label'] }}
                    </span>
                    <span class="block text-xs text-slate-500 mt-0.5">
                        {{ $stat['sub'] }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
