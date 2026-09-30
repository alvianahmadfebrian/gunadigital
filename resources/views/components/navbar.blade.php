<header class="sticky top-0 z-40 w-full transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-blue-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <a href="{{ route('home') }}" class="flex items-center group py-1">
                <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}" alt="GunaDigital" class="h-11 sm:h-13 md:h-14 w-auto max-w-[210px] sm:max-w-[260px] object-contain group-hover:scale-105 transition-transform duration-300">
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="{{ route('home') }}#layanan" class="hover:text-blue-600 transition-colors">Layanan</a>
                <a href="{{ route('home') }}#keunggulan" class="hover:text-blue-600 transition-colors">Keunggulan</a>
                <a href="{{ route('home') }}#portofolio" class="hover:text-blue-600 transition-colors">Portofolio</a>
                <a href="{{ route('home') }}#harga" class="hover:text-blue-600 transition-colors">Paket Harga</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">

                <button @click="contactModalOpen = true"
                        type="button"
                        class="flex items-center gap-2 px-5 py-2.5 rounded-xl font-bold text-sm bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white shadow-md shadow-blue-500/25 hover:shadow-lg hover:shadow-blue-500/35 hover:-translate-y-0.5 transition-all">
                    <svg class="w-4 h-4 text-blue-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <span>Konsultasi Gratis</span>
                </button>
            </div>

            <div class="flex items-center gap-2 md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        type="button"
                        class="p-2 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden border-b border-blue-100 bg-white/98 backdrop-blur-xl px-4 pt-3 pb-6 space-y-3">
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#layanan" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Layanan</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#keunggulan" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Keunggulan</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#portofolio" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Portofolio</a>
        <a @click="mobileMenuOpen = false" href="{{ route('home') }}#harga" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600">Paket Harga</a>
        <div class="pt-2">
            <button @click="contactModalOpen = true; mobileMenuOpen = false"
                    type="button"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold text-center shadow-lg shadow-blue-500/25">
                Konsultasi Gratis Sekarang
            </button>
        </div>
    </div>
</header>
