<footer class="bg-white text-slate-600 border-t border-blue-100 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-100">

            <div class="space-y-5">
                <a href="{{ route('home') }}" class="inline-block group">
                    <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}" alt="GunaDigital" class="h-10 sm:h-12 w-auto max-w-[200px] sm:max-w-[240px] object-contain group-hover:scale-105 transition-transform duration-300">
                </a>

                <p class="text-xs text-slate-500 leading-relaxed max-w-xs">
                    Studio kreatif digital penyedia jasa pembuatan website profesional & undangan digital interaktif elegan untuk bisnis & UMKM Indonesia.
                </p>

                <div class="flex items-center gap-2 pt-1">
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="w-8 h-8 rounded-xl bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white flex items-center justify-center transition-colors border border-blue-100">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://tiktok.com" target="_blank" rel="noopener" class="w-8 h-8 rounded-xl bg-pink-50 hover:bg-pink-600 text-pink-600 hover:text-white flex items-center justify-center transition-colors border border-pink-100">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.99v8.29c0 1.53-.33 3.08-1.09 4.38-1.12 1.95-3.1 3.28-5.32 3.51-2.4.26-4.9-.53-6.57-2.27-1.7-1.77-2.37-4.32-1.74-6.72.63-2.4 2.47-4.32 4.88-5.01.69-.2 1.41-.29 2.13-.29v4.11c-.56.03-1.13.19-1.61.49-.93.59-1.45 1.67-1.32 2.75.12 1.09.91 1.98 1.99 2.22 1.09.24 2.24-.26 2.77-1.23.27-.5.39-1.08.38-1.65V.02h-.01z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Navigasi</h4>
                <ul class="space-y-2.5 text-xs">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#faq" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Legal & Kebijakan</h4>
                <ul class="space-y-2.5 text-xs">
                    <li>
                        <a href="{{ route('terms') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Syarat & Ketentuan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('refund') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Kebijakan Pengembalian Dana
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Kebijakan Privasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-blue-600 transition-colors inline-block hover:translate-x-1 duration-200">
                            Halaman Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Hubungi Kami</h4>
                <div class="space-y-2.5 text-xs text-slate-600">
                    <div>
                        <span class="font-medium">WhatsApp:</span>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="hover:text-blue-600 transition-colors"> +62 812-3456-7890</a>
                    </div>
                    <div>
                        <span class="font-medium">Email:</span>
                        <a href="mailto:halo@gunadigital.id" class="hover:text-blue-600 transition-colors"> halo@gunadigital.id</a>
                    </div>
                    <div>
                        <span class="font-medium">Jam Kerja:</span>
                        <span> Senin - Sabtu (08.00 - 21.00 WIB)</span>
                    </div>
                    <div>
                        <span class="font-medium">Lokasi:</span>
                        <span> Jakarta & Bandung, Indonesia</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} GunaDigital. Seluruh Hak Cipta Dilindungi.</p>
            <div class="flex items-center gap-4 text-slate-500 font-medium">
                <span class="text-blue-600">Garansi Revisi 100%</span>
                <span>•</span>
                <span>Fast Support WhatsApp</span>
                <span>•</span>
                <span>SSL Encrypted</span>
            </div>
        </div>
    </div>
</footer>
