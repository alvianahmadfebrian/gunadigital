@props(['packages' => []])

<section id="harga" class="py-20 relative overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-14 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                Transparan & Terjangkau
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                Pilihan Paket Harga Terbaik
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Investasi terbaik untuk memajukan bisnis atau mengabadikan momen terindah Anda. Tanpa biaya tersembunyi.
            </p>

            <div class="inline-flex p-1.5 rounded-2xl bg-white border border-slate-200 shadow-sm mt-4">
                <button @click="activePricingTab = 'website'"
                        :class="activePricingTab === 'website' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                        class="px-6 py-2.5 rounded-xl text-sm font-bold transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Paket Website Bisnis</span>
                </button>
                <button @click="activePricingTab = 'undangan'"
                        :class="activePricingTab === 'undangan' ? 'bg-pink-600 text-white shadow-md' : 'text-slate-600 hover:text-slate-900'"
                        class="px-6 py-2.5 rounded-xl text-sm font-bold transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <span>Paket Undangan Digital</span>
                </button>
            </div>
        </div>

        <div x-show="activePricingTab === 'website'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

            @foreach($packages['website'] as $pkg)
            <div class="relative bg-white rounded-3xl p-8 sm:p-9 flex flex-col justify-between border {{ $pkg['popular'] ? 'border-blue-600 ring-2 ring-blue-500/20 shadow-xl shadow-blue-500/10' : 'border-slate-200 shadow-sm hover:border-blue-300' }}">
                @if($pkg['popular'])
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-xs font-black uppercase tracking-wider shadow-md">
                    {{ $pkg['badge'] ?? 'Paling Diminati' }}
                </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">{{ $pkg['name'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1.5 leading-relaxed">{{ $pkg['description'] }}</p>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <span class="text-xs text-slate-500 uppercase tracking-wider block">Harga Mulai:</span>
                        <div class="flex items-baseline gap-2 mt-1">
                            <span class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">{{ $pkg['price'] }}</span>
                            <span class="text-xs text-slate-500 font-medium">/ {{ $pkg['period'] }}</span>
                        </div>
                    </div>

                    <ul class="space-y-3 pt-2 text-sm text-slate-700">
                        @foreach($pkg['features'] as $feat)
                        <li class="flex items-start gap-3 text-xs sm:text-sm">
                            <svg class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-8 mt-6 border-t border-slate-100">
                    <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20tertarik%20dengan%20{{ urlencode($pkg['name']) }}%20untuk%20website%20saya"
                       target="_blank"
                       rel="noopener"
                       class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl font-bold text-sm text-center transition-all duration-200 {{ $pkg['popular'] ? 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'bg-blue-50 hover:bg-blue-100 text-blue-700' }}">
                        <span>{{ $pkg['cta'] }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        <div x-show="activePricingTab === 'undangan'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

            @foreach($packages['undangan'] as $pkg)
            <div class="relative bg-white rounded-3xl p-8 sm:p-9 flex flex-col justify-between border {{ $pkg['popular'] ? 'border-pink-500 ring-2 ring-pink-500/20 shadow-xl shadow-pink-500/10' : 'border-slate-200 shadow-sm hover:border-pink-300' }}">
                @if($pkg['popular'])
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-pink-600 to-rose-600 text-white text-xs font-black uppercase tracking-wider shadow-md">
                    {{ $pkg['badge'] ?? 'Paling Diminati' }}
                </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900">{{ $pkg['name'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1.5 leading-relaxed">{{ $pkg['description'] }}</p>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <span class="text-xs text-slate-500 uppercase tracking-wider block">Harga Mulai:</span>
                        <div class="flex items-baseline gap-2 mt-1">
                            <span class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">{{ $pkg['price'] }}</span>
                            <span class="text-xs text-slate-500 font-medium">/ {{ $pkg['period'] }}</span>
                        </div>
                    </div>

                    <ul class="space-y-3 pt-2 text-sm text-slate-700">
                        @foreach($pkg['features'] as $feat)
                        <li class="flex items-start gap-3 text-xs sm:text-sm">
                            <svg class="w-4 h-4 text-pink-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-8 mt-6 border-t border-slate-100">
                    <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20tertarik%20pesan%20{{ urlencode($pkg['name']) }}"
                       target="_blank"
                       rel="noopener"
                       class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-xl font-bold text-sm text-center transition-all duration-200 {{ $pkg['popular'] ? 'bg-pink-600 hover:bg-pink-700 text-white shadow-lg shadow-pink-600/25' : 'bg-pink-50 hover:bg-pink-100 text-pink-700' }}">
                        <span>{{ $pkg['cta'] }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
