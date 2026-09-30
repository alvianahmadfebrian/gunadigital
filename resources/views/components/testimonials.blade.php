@props(['testimonials' => []])

<section class="py-20 relative bg-blue-50/30 border-t border-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-200">
                Ulasan Jujur Klien
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                Dipercaya Ratusan Pemilik Usaha & <br>
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-sky-600 bg-clip-text text-transparent">
                    Pasangan Bahagia di Seluruh Indonesia
                </span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Kepuasan Anda adalah prioritas mutlak kami. Simak apa yang mereka katakan mengenai pengalaman menggunakan layanan kami.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            @foreach($testimonials as $t)
            <div class="bg-white rounded-3xl p-8 flex flex-col justify-between border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-300 group hover:-translate-y-1.5 transition-all">
                <div class="space-y-4">

                    <div class="flex items-center gap-1 text-amber-400">
                        @for($i = 0; $i < $t['rating']; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>

                    <p class="text-slate-700 text-sm leading-relaxed italic">
                        "{{ $t['content'] }}"
                    </p>
                </div>

                <div class="pt-6 mt-6 border-t border-slate-100 flex items-center gap-4">
                    <img src="{{ $t['avatar'] }}"
                         alt="{{ $t['name'] }}"
                         class="w-12 h-12 rounded-full object-cover border-2 border-blue-200">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">{{ $t['name'] }}</h4>
                        <span class="block text-xs text-slate-500">{{ $t['role'] }}</span>
                        <span class="inline-block mt-1 text-[10px] font-bold text-blue-700 bg-blue-50 border border-blue-100 px-2 py-0.5 rounded-md">
                            {{ $t['service'] }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
