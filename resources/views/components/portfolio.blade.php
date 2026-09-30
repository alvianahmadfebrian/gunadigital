@props(['portfolios' => []])

<section id="portofolio" class="py-20 relative bg-blue-50/30 border-t border-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-12 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                Karya & Inspirasi Desain
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                Portofolio Proyek Terpilih
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Jelajahi beberapa hasil karya website bisnis dan tema undangan digital yang telah kami selesaikan dengan kepuasan penuh dari para klien.
            </p>

            <div class="inline-flex p-1.5 rounded-2xl bg-white border border-slate-200 shadow-sm mt-4">
                <button @click="activeServiceTab = 'all'"
                        :class="activeServiceTab === 'all' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all">
                    Semua Proyek
                </button>
                <button @click="activeServiceTab = 'website'"
                        :class="activeServiceTab === 'website' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all">
                    Website Bisnis
                </button>
                <button @click="activeServiceTab = 'undangan'"
                        :class="activeServiceTab === 'undangan' ? 'bg-pink-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all">
                    Undangan Digital
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($portfolios as $item)
            <div x-show="activeServiceTab === 'all' || activeServiceTab === '{{ $item['category'] }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="bg-white rounded-3xl overflow-hidden group flex flex-col justify-between border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-300 hover:-translate-y-1.5 transition-all duration-300">

                <div class="relative overflow-hidden aspect-[16/10] bg-slate-100">
                    <img src="{{ $item['image'] }}"
                         alt="{{ $item['title'] }}"
                         loading="lazy"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/75 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>

                    <div class="absolute top-4 left-4 flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs font-bold text-white shadow-md backdrop-blur-md {{ $item['category'] === 'website' ? 'bg-blue-600/90' : 'bg-pink-600/90' }}">
                            {{ $item['category'] === 'website' ? 'Website' : 'Undangan Digital' }}
                        </span>
                        @if(!empty($item['link']) && $item['link'] !== '#')
                        <a href="{{ $item['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="px-2.5 py-1 rounded-full text-[11px] font-bold text-slate-900 bg-white/95 shadow-md backdrop-blur-md hover:bg-white flex items-center gap-1 transition-colors">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>Live ↗</span>
                        </a>
                        @endif
                    </div>

                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-slate-900/30 backdrop-blur-xs gap-3">
                        <button @click="portfolioModal.show(@js($item))"
                                type="button"
                                class="px-4 py-2.5 rounded-xl bg-white text-slate-900 font-bold text-xs shadow-xl hover:scale-105 transition-transform flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <span>Detail Demo</span>
                        </button>
                        @if(!empty($item['link']) && $item['link'] !== '#')
                        <a href="{{ $item['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="px-4 py-2.5 rounded-xl bg-blue-600 text-white font-bold text-xs shadow-xl hover:bg-blue-700 hover:scale-105 transition-all flex items-center gap-1.5">
                            <span>Buka Web ↗</span>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-xs text-slate-500">
                            <span class="font-bold text-blue-600">{{ $item['tag'] }}</span>
                            @if(!empty($item['link']) && $item['link'] !== '#')
                            <a href="{{ $item['link'] }}" target="_blank" rel="noopener" class="text-emerald-600 font-semibold hover:underline flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Online Web
                            </a>
                            @else
                            <span class="text-slate-400">Live Project</span>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $item['description'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        @if(!empty($item['link']) && $item['link'] !== '#')
                        <a href="{{ $item['link'] }}"
                           target="_blank"
                           rel="noopener"
                           class="text-xs font-bold text-blue-600 hover:text-blue-800 flex items-center gap-1 transition-colors">
                            <span>Kunjungi Website</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        @else
                        <button @click="portfolioModal.show(@js($item))"
                                type="button"
                                class="text-xs font-bold text-slate-700 hover:text-blue-600 flex items-center gap-1.5 transition-colors">
                            <span>Buka Pratinjau</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        @endif

                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>

    <div x-show="portfolioModal.open"
         x-cloak
         class="fixed inset-0 z-50 overflow-y-auto"
         style="display: none;">

        <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity"
             @click="portfolioModal.close()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div @click.away="portfolioModal.close()"
                 x-show="portfolioModal.open"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-6 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl overflow-hidden">

                <template x-if="portfolioModal.item">
                    <div>

                        <div class="relative aspect-[16/8] w-full bg-slate-900 overflow-hidden">
                            <img :src="portfolioModal.item.image"
                                 :alt="portfolioModal.item.title"
                                 class="w-full h-full object-cover opacity-70">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>

                            <button @click="portfolioModal.close()"
                                    type="button"
                                    class="absolute top-4 right-4 w-9 h-9 flex items-center justify-center rounded-full bg-white/15 backdrop-blur-md border border-white/20 text-white hover:bg-white/30 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>

                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-[11px] font-bold text-white backdrop-blur-md border border-white/20"
                                      :class="portfolioModal.item.category === 'website' ? 'bg-blue-600/80' : 'bg-pink-600/80'"
                                      x-text="portfolioModal.item.category === 'website' ? 'Website Bisnis' : 'Undangan Digital'"></span>
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 px-7 pb-6">
                                <p class="text-[11px] font-semibold text-white/50 uppercase tracking-widest mb-1.5" x-text="portfolioModal.item.tag"></p>
                                <h3 class="text-2xl sm:text-3xl font-extrabold text-white leading-snug" x-text="portfolioModal.item.title"></h3>
                            </div>
                        </div>

                        <div class="px-7 py-6 space-y-5">

                            <p class="text-slate-500 text-sm leading-relaxed" x-text="portfolioModal.item.description"></p>

                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-100">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    Mobile Responsive
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-100">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    Akses Cepat
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-100">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    WhatsApp Terintegrasi
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-100">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    Desain Eksklusif
                                </span>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-3 pt-1 border-t border-slate-100">
                                <template x-if="portfolioModal.item.link && portfolioModal.item.link !== '#'">
                                    <a :href="portfolioModal.item.link"
                                       target="_blank"
                                       rel="noopener"
                                       class="flex-1 py-3 px-6 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm text-center shadow-md shadow-blue-500/20 flex items-center justify-center gap-2 transition-all hover:-translate-y-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                        Buka Website
                                    </a>
                                </template>
                                <button @click="portfolioModal.close()"
                                        type="button"
                                        class="py-3 px-6 rounded-2xl border border-slate-200 font-semibold text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </div>
</section>

