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

                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-500 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
                            <span class="text-xs font-semibold text-slate-500 ml-2">Interactive Preview</span>
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

                    <!-- Invitation Theme Picker (Undangan Mode Only) -->
                    <div x-show="invitationMockup.activeMode !== 'website'" class="mb-3 flex items-center justify-between px-1 text-xs">
                        <span class="text-[11px] font-semibold text-slate-500">Pilih Tema:</span>
                        <div class="flex items-center gap-1.5">
                            <button @click="invitationMockup.theme = 'gold'"
                                    :class="invitationMockup.theme === 'gold' ? 'ring-2 ring-amber-500 ring-offset-1 font-bold text-amber-900 bg-amber-100' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                    class="px-2.5 py-1 rounded-full text-[10px] transition-all flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                <span>Royal Gold</span>
                            </button>
                            <button @click="invitationMockup.theme = 'rose'"
                                    :class="invitationMockup.theme === 'rose' ? 'ring-2 ring-pink-500 ring-offset-1 font-bold text-pink-900 bg-pink-100' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                    class="px-2.5 py-1 rounded-full text-[10px] transition-all flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-pink-400"></span>
                                <span>Blush Rose</span>
                            </button>
                            <button @click="invitationMockup.theme = 'emerald'"
                                    :class="invitationMockup.theme === 'emerald' ? 'ring-2 ring-emerald-500 ring-offset-1 font-bold text-emerald-900 bg-emerald-100' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                    class="px-2.5 py-1 rounded-full text-[10px] transition-all flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                <span>Emerald</span>
                            </button>
                        </div>
                    </div>

                    <!-- MOCKUP UNDANGAN DIGITAL (ROYAL BOTANICAL LUXURY PHONE FRAME) -->
                    <div x-show="invitationMockup.activeMode !== 'website'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="relative mx-auto w-full max-w-[360px] bg-gradient-to-b from-slate-900 via-slate-800 to-black rounded-[48px] p-3 shadow-2xl border-[4px] border-slate-700 ring-1 ring-black/30">

                        <!-- Side buttons & chassis reflection accents -->
                        <div class="absolute -left-[5px] top-24 w-[3px] h-10 bg-slate-600 rounded-l-sm"></div>
                        <div class="absolute -left-[5px] top-38 w-[3px] h-10 bg-slate-600 rounded-l-sm"></div>
                        <div class="absolute -right-[5px] top-28 w-[3px] h-14 bg-slate-600 rounded-r-sm"></div>

                        <!-- Dynamic Island -->
                        <div class="absolute top-4 left-1/2 -translate-x-1/2 w-28 h-5 bg-black rounded-full z-40 flex items-center justify-between px-2.5 shadow-inner">
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center">
                                <span class="w-1 h-1 rounded-full bg-blue-500/80"></span>
                            </span>
                            <span class="w-2 h-2 rounded-full bg-emerald-500/80 animate-pulse"></span>
                        </div>

                        <!-- INNER SCREEN (WARM ROYAL BOTANICAL THEME) -->
                        <div class="relative bg-[#fbf9f6] text-[#1b1c1a] rounded-[38px] overflow-hidden pt-7 pb-4 px-3.5 h-[540px] overflow-y-auto hide-scrollbar scroll-smooth border border-amber-900/10 transition-colors">

                            <!-- Subtle Ambient Falling Petals inside Phone -->
                            <div class="pointer-events-none absolute inset-0 z-10 overflow-hidden">
                                <div class="absolute petal-1 top-0 w-2 h-3 rounded-full bg-amber-400/30 blur-[0.5px]"></div>
                                <div class="absolute petal-2 top-0 w-2.5 h-3.5 rounded-full bg-emerald-600/25 blur-[0.5px]"></div>
                                <div class="absolute petal-3 top-0 w-2 h-2 rounded-full bg-amber-600/25 blur-[0.3px]"></div>
                                <div class="absolute petal-4 top-0 w-2.5 h-3.5 rounded-full bg-rose-400/30 blur-[0.5px]"></div>
                            </div>

                            <!-- FLOATING MUSIC PLAYER PILL -->
                            <div class="relative z-30 flex items-center justify-between px-3 py-1.5 rounded-full bg-white/90 backdrop-blur-md mb-3 border border-[#c5a059]/40 shadow-md">
                                <div class="flex items-center gap-2 overflow-hidden">
                                    <div :class="invitationMockup.isPlayingAudio ? 'animate-spin-slow' : ''"
                                         class="w-5 h-5 rounded-full bg-[#4d6453] border border-[#c5a059] flex items-center justify-center shrink-0 shadow-sm">
                                        <div class="w-1.5 h-1.5 rounded-full bg-[#fbf9f6]"></div>
                                    </div>
                                    <div class="truncate text-left">
                                        <p class="text-[10px] font-semibold text-[#1b1c1a] truncate max-w-[130px]"
                                           x-text="invitationMockup.isPlayingAudio ? 'Canon in D - London Symphony' : 'Putar Musik Pengantin'"></p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-1.5">
                                    <div x-show="invitationMockup.isPlayingAudio" class="flex items-end gap-0.5 h-3">
                                        <span class="w-0.5 bg-[#775a19] rounded-full eq-bar-1"></span>
                                        <span class="w-0.5 bg-[#775a19] rounded-full eq-bar-2"></span>
                                        <span class="w-0.5 bg-[#775a19] rounded-full eq-bar-3"></span>
                                        <span class="w-0.5 bg-[#775a19] rounded-full eq-bar-4"></span>
                                    </div>

                                    <button @click="invitationMockup.toggleAudio()"
                                            type="button"
                                            class="px-2.5 py-0.5 rounded-full bg-[#4d6453] hover:bg-[#364c3c] text-[#ffdea5] text-[10px] font-bold transition-all shadow-sm">
                                        <span x-text="invitationMockup.isPlayingAudio ? 'Pause' : 'Play ♫'"></span>
                                    </button>
                                </div>
                            </div>

                            <!-- COVER / CURTAIN SECTION -->
                            <div class="relative z-20 text-center space-y-3 py-1">
                                <!-- Monogram Emblem with soft animated aura -->
                                <div class="flex justify-center pt-1">
                                    <div class="relative w-16 h-16 rounded-full p-1 bg-white/90 backdrop-blur-md shadow-lg border border-[#c5a059]/50 flex items-center justify-center">
                                        <div class="absolute inset-1 rounded-full border border-[#c5a059]/30"></div>
                                        <span class="font-serif font-bold text-lg text-[#775a19] tracking-wider">R & A</span>
                                    </div>
                                </div>

                                <!-- Overline Tag -->
                                <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-[#efeeeb] text-[9px] font-bold tracking-widest text-[#775a19] uppercase border border-[#d1c5b4]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#4d6453] animate-ping"></span>
                                    <span>Royal Botanical Wedding</span>
                                </div>

                                <!-- Main Headline -->
                                <div class="space-y-0.5">
                                    <h2 class="font-serif text-2xl font-bold tracking-tight text-[#1b1c1a] leading-tight">
                                        Raditya <span class="text-[#775a19] italic font-normal">&</span> Anindya
                                    </h2>
                                    <p class="text-[11px] text-[#695b56] font-medium font-serif">
                                        Sabtu, 18 Oktober 2025 <span class="text-[#c5a059] mx-1">•</span> Jakarta
                                    </p>
                                </div>

                                <!-- Special Guest Card -->
                                <div class="relative mx-auto p-3 rounded-2xl bg-white/95 border border-[#c5a059]/40 shadow-md text-center overflow-hidden">
                                    <div class="text-[9px] uppercase tracking-wider font-semibold text-[#775a19] mb-0.5 flex items-center justify-center gap-1">
                                        <span>⚜️</span>
                                        <span>Kepada Yth. Tamu Undangan</span>
                                    </div>
                                    <h3 class="font-serif font-bold text-sm text-[#1b1c1a] my-0.5" x-text="invitationMockup.guestName"></h3>
                                    <span class="inline-block px-2.5 py-0.5 rounded-full text-[9px] font-semibold bg-[#cde6d1] text-[#364c3c]">
                                        Tamu Spesial & Kehormatan
                                    </span>
                                </div>

                                <!-- Countdown Timer Grid -->
                                <div class="grid grid-cols-4 gap-1.5 text-center">
                                    <div class="bg-white rounded-xl py-2 px-1 border border-[#e4e2df] shadow-xs">
                                        <span class="block text-base font-bold text-[#775a19] font-serif leading-none" x-text="invitationMockup.days"></span>
                                        <span class="text-[8px] text-[#695b56] uppercase tracking-wider font-semibold">Hari</span>
                                    </div>
                                    <div class="bg-white rounded-xl py-2 px-1 border border-[#e4e2df] shadow-xs">
                                        <span class="block text-base font-bold text-[#775a19] font-serif leading-none" x-text="invitationMockup.hours"></span>
                                        <span class="text-[8px] text-[#695b56] uppercase tracking-wider font-semibold">Jam</span>
                                    </div>
                                    <div class="bg-white rounded-xl py-2 px-1 border border-[#e4e2df] shadow-xs">
                                        <span class="block text-base font-bold text-[#775a19] font-serif leading-none" x-text="invitationMockup.minutes"></span>
                                        <span class="text-[8px] text-[#695b56] uppercase tracking-wider font-semibold">Menit</span>
                                    </div>
                                    <div class="bg-white rounded-xl py-2 px-1 border border-[#e4e2df] shadow-xs">
                                        <span class="block text-base font-bold text-[#775a19] font-serif leading-none" x-text="invitationMockup.seconds"></span>
                                        <span class="text-[8px] text-[#695b56] uppercase tracking-wider font-semibold">Detik</span>
                                    </div>
                                </div>

                                <!-- CTA Button: Buka Undangan -->
                                <div class="pt-1">
                                    <button @click="invitationMockup.isOpened = !invitationMockup.isOpened"
                                            type="button"
                                            class="w-full py-2.5 px-4 rounded-xl bg-[#4d6453] hover:bg-[#364c3c] text-[#ffdea5] font-bold text-xs shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                        <span x-text="invitationMockup.isOpened ? 'Tutup Detail Acara' : 'Buka Undangan Lengkap ⬇'"></span>
                                    </button>
                                </div>
                            </div>

                            <!-- OPENED DETAILED SECTIONS (FULL INVITATION STORY) -->
                            <div x-show="invitationMockup.isOpened"
                                 x-transition:enter="transition ease-out duration-400"
                                 x-transition:enter-start="opacity-0 translate-y-4"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 class="space-y-4 pt-4 text-left relative z-20 border-t border-[#d1c5b4] mt-4">

                                <!-- Editorial Couple Photo Card -->
                                <div class="relative rounded-2xl overflow-hidden shadow-lg bg-white p-1.5 border border-[#e4e2df]">
                                    <div class="relative h-44 rounded-xl overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80"
                                             alt="Raditya & Anindya"
                                             class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent"></div>
                                        <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                            <span class="text-[8px] uppercase tracking-widest text-[#ffdea5] block font-semibold">Our Eternal Beginning</span>
                                            <p class="font-serif text-xs font-bold leading-tight">Dua Hati, Satu Janji Abadi</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Holy Verse Ar-Rum 21 -->
                                <div class="p-3 rounded-2xl bg-[#f5f3f0] border border-[#c5a059]/30 text-center space-y-1">
                                    <span class="text-[9px] uppercase tracking-[0.2em] font-bold text-[#775a19]">QS. Ar-Rum : 21</span>
                                    <p class="font-serif text-[10px] text-[#1b1c1a] italic leading-relaxed">
                                        “Dan di antara tanda-tanda kebesaran-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu merasa tenteram kepadanya...”
                                    </p>
                                </div>

                                <!-- The Couple Profiles -->
                                <div class="space-y-2">
                                    <div class="text-center">
                                        <span class="text-[9px] uppercase tracking-widest text-[#775a19] font-bold">Mempelai Berbahagia</span>
                                    </div>

                                    <!-- Groom -->
                                    <div class="p-3 rounded-2xl bg-white border border-[#e4e2df] shadow-xs flex items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80"
                                             alt="Groom"
                                             class="w-12 h-12 rounded-xl object-cover border border-[#c5a059]/50 shrink-0">
                                        <div class="flex-1 min-w-0">
                                            <span class="text-[8px] uppercase tracking-wider font-bold text-[#775a19]">The Groom</span>
                                            <h4 class="font-serif font-bold text-xs text-[#1b1c1a] truncate">Raditya Arya Pratama, S.T.</h4>
                                            <p class="text-[9px] text-[#695b56] truncate">Putra Bpk. Bambang & Ibu Ratna</p>
                                        </div>
                                    </div>

                                    <!-- Bride -->
                                    <div class="p-3 rounded-2xl bg-white border border-[#e4e2df] shadow-xs flex items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80"
                                             alt="Bride"
                                             class="w-12 h-12 rounded-xl object-cover border border-[#c5a059]/50 shrink-0">
                                        <div class="flex-1 min-w-0">
                                            <span class="text-[8px] uppercase tracking-wider font-bold text-[#775a19]">The Bride</span>
                                            <h4 class="font-serif font-bold text-xs text-[#1b1c1a] truncate">Anindya Kirana Putri, S.Ds.</h4>
                                            <p class="text-[9px] text-[#695b56] truncate">Putri Bpk. Hendra & Ibu Sofia</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Rangkaian Acara (Akad & Resepsi) -->
                                <div class="space-y-2">
                                    <div class="text-center">
                                        <span class="text-[9px] uppercase tracking-widest text-[#775a19] font-bold">Rangkaian Acara</span>
                                    </div>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="p-2.5 rounded-xl bg-white border border-[#c5a059]/30 text-center space-y-0.5">
                                            <span class="text-xs">💍</span>
                                            <h5 class="text-[11px] font-bold text-[#1b1c1a] font-serif">Akad Nikah</h5>
                                            <p class="text-[9px] font-semibold text-[#775a19]">08.00 - 10.00 WIB</p>
                                            <p class="text-[8px] text-[#695b56]">Masjid Agung Al-Azhar</p>
                                        </div>
                                        <div class="p-2.5 rounded-xl bg-white border border-[#4d6453]/30 text-center space-y-0.5">
                                            <span class="text-xs">🥂</span>
                                            <h5 class="text-[11px] font-bold text-[#1b1c1a] font-serif">Resepsi</h5>
                                            <p class="text-[9px] font-semibold text-[#4d6453]">19.00 - 22.00 WIB</p>
                                            <p class="text-[8px] text-[#695b56]">The Ritz-Carlton Jakarta</p>
                                        </div>
                                    </div>

                                    <!-- Attire Guide Swatches -->
                                    <div class="p-2.5 rounded-xl bg-white border border-[#e4e2df] text-center">
                                        <span class="text-[9px] font-bold text-[#775a19] uppercase tracking-wider block mb-1">Panduan Busana (Attire Guide)</span>
                                        <div class="flex items-center justify-center gap-3">
                                            <div class="flex items-center gap-1 text-[9px] text-[#695b56]">
                                                <span class="w-3 h-3 rounded-full bg-[#c5a059] inline-block border border-black/10"></span>
                                                <span>Champagne</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-[9px] text-[#695b56]">
                                                <span class="w-3 h-3 rounded-full bg-[#4d6453] inline-block border border-black/10"></span>
                                                <span>Sage Pine</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-[9px] text-[#695b56]">
                                                <span class="w-3 h-3 rounded-full bg-[#d5c3bc] inline-block border border-black/10"></span>
                                                <span>Rose Cream</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Switcher: RSVP vs Amplop Digital -->
                                <div class="bg-white rounded-2xl p-3 shadow-md border border-[#e4e2df] space-y-3">
                                    <div class="flex p-1 bg-[#efeeeb] rounded-xl text-[10px] font-bold">
                                        <button @click="invitationMockup.activeTab = 'rsvp'"
                                                :class="invitationMockup.activeTab === 'rsvp' ? 'bg-white text-[#775a19] shadow-xs' : 'text-[#695b56]'"
                                                class="flex-1 py-1.5 rounded-lg text-center transition-all">
                                            Konfirmasi RSVP
                                        </button>
                                        <button @click="invitationMockup.activeTab = 'gift'"
                                                :class="invitationMockup.activeTab === 'gift' ? 'bg-white text-[#775a19] shadow-xs' : 'text-[#695b56]'"
                                                class="flex-1 py-1.5 rounded-lg text-center transition-all">
                                            Amplop Digital / Kado
                                        </button>
                                    </div>

                                    <!-- Panel RSVP -->
                                    <div x-show="invitationMockup.activeTab === 'rsvp'" class="space-y-2">
                                        <input type="text"
                                               x-model="invitationMockup.rsvp.name"
                                               placeholder="Nama Lengkap Tamu..."
                                               class="w-full text-[10px] bg-[#f5f3f0] border border-[#d1c5b4] rounded-lg px-2.5 py-1.5 text-[#1b1c1a]">

                                        <select x-model="invitationMockup.rsvp.status"
                                                class="w-full text-[10px] bg-[#f5f3f0] border border-[#d1c5b4] rounded-lg px-2 py-1.5 text-[#1b1c1a]">
                                            <option value="Hadir (1 Orang)">Hadir (1 Orang)</option>
                                            <option value="Hadir (2 Orang / Berpasangan)">Hadir (2 Orang / Berpasangan)</option>
                                            <option value="Maaf, Belum Dapat Hadir">Maaf, Belum Dapat Hadir</option>
                                        </select>

                                        <textarea x-model="invitationMockup.rsvp.notes"
                                                  rows="2"
                                                  placeholder="Tuliskan ucapan dan doa hangat Anda..."
                                                  class="w-full text-[10px] bg-[#f5f3f0] border border-[#d1c5b4] rounded-lg px-2.5 py-1.5 text-[#1b1c1a]"></textarea>

                                        <button @click="invitationMockup.sendRsvpWhatsapp()"
                                                type="button"
                                                class="w-full py-2 px-3 rounded-lg bg-[#4d6453] hover:bg-[#364c3c] text-[#ffdea5] font-bold text-[10px] flex items-center justify-center gap-1.5 transition-all shadow-sm">
                                            <span>Kirim Konfirmasi via WhatsApp</span>
                                        </button>

                                        <div x-show="invitationMockup.rsvp.submitted" class="p-2 rounded-lg bg-[#cde6d1] text-[#364c3c] text-[9px] font-semibold text-center">
                                            ✓ Konfirmasi RSVP berhasil terkirim!
                                        </div>
                                    </div>

                                    <!-- Panel Amplop Digital -->
                                    <div x-show="invitationMockup.activeTab === 'gift'" class="space-y-2 text-[10px]">
                                        <!-- Bank BCA -->
                                        <div class="p-2.5 rounded-xl bg-[#f5f3f0] border border-[#c5a059]/30 flex items-center justify-between">
                                            <div>
                                                <span class="font-bold text-[#775a19] text-[9px]">BANK BCA</span>
                                                <p class="font-mono font-bold text-xs text-[#1b1c1a]">8820491823</p>
                                                <p class="text-[8px] text-[#695b56]">a.n. Raditya Arya Pratama</p>
                                            </div>
                                            <button @click="invitationMockup.copyRekening('8820491823', 'BCA')"
                                                    type="button"
                                                    class="px-2 py-1 bg-white hover:bg-[#eae8e5] text-[#1b1c1a] font-bold text-[9px] rounded-lg border border-[#d1c5b4] transition-all">
                                                <span x-text="invitationMockup.copiedBank === 'BCA' ? '✓ Tersalin' : 'Salin'"></span>
                                            </button>
                                        </div>

                                        <!-- Bank Mandiri -->
                                        <div class="p-2.5 rounded-xl bg-[#f5f3f0] border border-[#4d6453]/30 flex items-center justify-between">
                                            <div>
                                                <span class="font-bold text-[#4d6453] text-[9px]">BANK MANDIRI</span>
                                                <p class="font-mono font-bold text-xs text-[#1b1c1a]">1370019283741</p>
                                                <p class="text-[8px] text-[#695b56]">a.n. Anindya Kirana Putri</p>
                                            </div>
                                            <button @click="invitationMockup.copyRekening('1370019283741', 'Mandiri')"
                                                    type="button"
                                                    class="px-2 py-1 bg-white hover:bg-[#eae8e5] text-[#1b1c1a] font-bold text-[9px] rounded-lg border border-[#d1c5b4] transition-all">
                                                <span x-text="invitationMockup.copiedBank === 'Mandiri' ? '✓ Tersalin' : 'Salin'"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Guestbook Wishes Stream -->
                                <div class="p-3 rounded-2xl bg-white border border-[#e4e2df] space-y-2">
                                    <div class="flex items-center justify-between text-[10px]">
                                        <span class="font-bold text-[#775a19] uppercase tracking-wider">Untaian Doa & Harapan</span>
                                        <span class="text-[9px] text-[#695b56]" x-text="invitationMockup.wishes.length + ' Pesan'"></span>
                                    </div>

                                    <div class="space-y-1.5 max-h-36 overflow-y-auto pr-1 hide-scrollbar">
                                        <template x-for="(wish, idx) in invitationMockup.wishes" :key="idx">
                                            <div class="p-2 rounded-xl bg-[#f5f3f0] border border-[#e4e2df] text-[9px] space-y-0.5">
                                                <div class="flex items-center justify-between font-semibold">
                                                    <span class="text-[#775a19]" x-text="wish.name"></span>
                                                    <span class="text-[8px] text-[#695b56]" x-text="wish.time"></span>
                                                </div>
                                                <p class="text-[#4e4639] leading-snug" x-text="wish.message"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                                <!-- Bottom Action Buttons inside phone -->
                                <div class="pt-2 pb-3 space-y-1.5 text-center">
                                    <a href="{{ route('invitation.demo') }}"
                                       target="_blank"
                                       class="w-full py-2.5 px-3 rounded-xl bg-[#775a19] hover:bg-[#5d4201] text-white font-bold text-[10px] flex items-center justify-center gap-1.5 transition-all shadow-md">
                                        <span>Buka Fullscreen Website Undangan ↗</span>
                                    </a>

                                    <button @click="invitationMockup.isOpened = false"
                                            type="button"
                                            class="w-full py-1.5 text-[9px] text-[#695b56] hover:text-[#1b1c1a] font-semibold">
                                        ▲ Tutup & Kembali ke Sampul
                                    </button>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- MOCKUP WEBSITE BISNIS -->
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

                    <div class="mt-3 text-center">
                        <span class="text-[11px] text-slate-500 font-medium">
                            💡 Klik tombol tema, audio <strong class="text-slate-700">Play</strong>, buka undangan & kirim ucapan secara langsung di simulasi!
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
