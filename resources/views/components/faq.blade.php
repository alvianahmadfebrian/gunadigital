@props(['faqs' => []])

<section id="faq" class="py-20 relative overflow-hidden bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-14 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                Pertanyaan Umum
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                Sering Ditanyakan (FAQ)
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Temukan jawaban cepat seputar proses pemesanan, teknis pembuatan website, dan tata cara pembuatan undangan digital.
            </p>
        </div>

        <div class="space-y-4">
            @foreach($faqs as $index => $faq)
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 hover:border-blue-300 shadow-xs transition-all">
                <button @click="toggleFaq({{ $index }})"
                        type="button"
                        class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 font-bold text-slate-900 text-base hover:text-blue-600 transition-colors">
                    <span>{{ $faq['q'] }}</span>
                    <span class="p-1 rounded-lg bg-slate-100 text-slate-500 shrink-0 transform transition-transform duration-200"
                          :class="activeFaq === {{ $index }} ? 'rotate-180 text-blue-600 bg-blue-50' : ''">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeFaq === {{ $index }}"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4 bg-blue-50/20">
                    {{ $faq['a'] }}
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-12 p-8 rounded-3xl bg-gradient-to-r from-blue-50 via-sky-50 to-indigo-50 border border-blue-100 text-center space-y-3 shadow-sm">
            <h3 class="text-lg font-bold text-slate-900">Masih memiliki pertanyaan lain yang belum terjawab?</h3>
            <p class="text-sm text-slate-600 max-w-xl mx-auto">
                Tim konsultasi kami siap membantu Anda dengan ramah dan cepat melalui chat WhatsApp tanpa dipungut biaya.
            </p>
            <div class="pt-2">
                <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20ingin%20tanya%20detail%20mengenai%20layanan%20Anda"
                   target="_blank"
                   rel="noopener"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold text-sm shadow-lg shadow-emerald-500/25 transition-all">
                    <span>Chat dengan Customer Support</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

    </div>
</section>
