<x-layouts.app :title="'Hubungi Kami - GunaDigital'">
    <div class="py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-8" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <span class="text-slate-300">/</span>
                <span class="text-blue-600 font-semibold">Halaman Kontak</span>
            </nav>

            <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-blue-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl shadow-blue-500/20 mb-12 relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 max-w-3xl space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/15 text-blue-100 border border-white/20">
                        <span>Layanan Konsultasi Cepat</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">
                        Mari Terhubung Bersama GunaDigital
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base leading-relaxed">
                        Punya pertanyaan, butuh penawaran kustom, atau ingin mendiskusikan konsep proyek website dan undangan digital Anda? Tim kami siap melayani Anda dengan senang hati.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <div class="lg:col-span-5 space-y-6">

                    <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20ingin%20konsultasi%20pembuatan%20website%20/%20undangan%20digital"
                       target="_blank"
                       rel="noopener"
                       class="group p-6 rounded-3xl bg-white border border-slate-200 shadow-sm hover:shadow-lg hover:border-emerald-300 transition-all flex items-start gap-4 block">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.073-.308-.09-.692-.224-1.211-.448-2.222-.962-3.666-3.218-3.777-3.367-.112-.149-.906-1.205-.906-2.298 0-1.094.574-1.632.778-1.854.204-.222.446-.278.595-.278.149 0 .298.002.428.008.139.007.324-.053.506.386.19.459.648 1.58.705 1.694.057.114.095.247.019.398-.076.152-.114.247-.228.38-.114.133-.24.298-.343.4-.114.114-.233.238-.101.465.133.227.591.975 1.267 1.579.871.777 1.605 1.018 1.833 1.132.228.114.362.095.495-.057.133-.152.572-.666.724-.894.152-.228.305-.19.513-.114.209.076 1.32.622 1.548.736.228.114.38.171.437.266.057.095.057.552-.087.957z"/>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Fast Response
                            </span>
                            <h3 class="text-base font-bold text-slate-900 group-hover:text-emerald-600 transition-colors">Chat WhatsApp Langsung</h3>
                            <p class="text-xs text-slate-500">+62 812-3456-7890</p>
                            <span class="text-xs font-semibold text-emerald-600 inline-flex items-center gap-1 pt-1">
                                <span>Buka Chat Sekarang</span>
                                <span>&rarr;</span>
                            </span>
                        </div>
                    </a>

                    <div class="p-6 rounded-3xl bg-white border border-slate-200 shadow-sm space-y-4">
                        <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Informasi Kontak Lainnya</h3>

                        <div class="space-y-3.5 text-xs text-slate-600">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-800">Email Resmi:</span>
                                    <a href="mailto:halo@gunadigital.id" class="text-blue-600 hover:underline">halo@gunadigital.id</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-800">Jam Operasional:</span>
                                    <span>Senin - Sabtu (08.00 - 21.00 WIB)</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-bold text-slate-800">Lokasi Studio:</span>
                                    <span>Jakarta & Bandung, Indonesia (Melayani Klien Seluruh Indonesia)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl bg-blue-50/70 border border-blue-100 flex items-center justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-slate-900">Ikuti Media Sosial Kami</h4>
                            <p class="text-[11px] text-slate-500">Lihat update portofolio terbaru & promo</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="https://instagram.com" target="_blank" class="w-8 h-8 rounded-xl bg-white hover:bg-blue-600 text-blue-600 hover:text-white flex items-center justify-center shadow-xs transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z"/>
                                </svg>
                            </a>
                            <a href="https://tiktok.com" target="_blank" class="w-8 h-8 rounded-xl bg-white hover:bg-pink-600 text-pink-600 hover:text-white flex items-center justify-center shadow-xs transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.99v8.29c0 1.53-.33 3.08-1.09 4.38-1.12 1.95-3.1 3.28-5.32 3.51-2.4.26-4.9-.53-6.57-2.27-1.7-1.77-2.37-4.32-1.74-6.72.63-2.4 2.47-4.32 4.88-5.01.69-.2 1.41-.29 2.13-.29v4.11c-.56.03-1.13.19-1.61.49-.93.59-1.45 1.67-1.32 2.75.12 1.09.91 1.98 1.99 2.22 1.09.24 2.24-.26 2.77-1.23.27-.5.39-1.08.38-1.65V.02h-.01z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm space-y-6">
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Formulir Pesan</span>
                        <h2 class="text-2xl font-bold text-slate-900">Kirim Rencana Kebutuhan Anda</h2>
                        <p class="text-xs sm:text-sm text-slate-500">
                            Isi formulir singkat ini, dan tim kami akan segera terhubung dengan Anda via WhatsApp dengan penawaran terbaik.
                        </p>
                    </div>

                    <form @submit.prevent="consultationForm.submit()" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                    Nama Lengkap <span class="text-rose-500">*</span>
                                </label>
                                <input type="text"
                                       x-model="consultationForm.name"
                                       required
                                       placeholder="Contoh: Budi Santoso"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                            </div>

                            <div class="space-y-1.5">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                    Nomor WhatsApp <span class="text-rose-500">*</span>
                                </label>
                                <input type="tel"
                                       x-model="consultationForm.phone"
                                       required
                                       placeholder="Contoh: 08123456789"
                                       class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                    Layanan yang Diinginkan
                                </label>
                                <select x-model="consultationForm.service"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all bg-white">
                                    <option value="website">Jasa Pembuatan Website Bisnis</option>
                                    <option value="undangan">Undangan Digital Interaktif</option>
                                    <option value="both">Keduanya (Website + Undangan)</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                    Estimasi Budget
                                </label>
                                <select x-model="consultationForm.budget"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all bg-white">
                                    <option value="Dibawah 500rb">Di bawah Rp 500.000</option>
                                    <option value="500rb - 1.5jt">Rp 500.000 - Rp 1.500.000</option>
                                    <option value="1.5jt - 3jt">Rp 1.500.000 - Rp 3.000.000</option>
                                    <option value="Diatas 3jt">Di atas Rp 3.000.000</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                Catatan / Deskripsi Kebutuhan
                            </label>
                            <textarea x-model="consultationForm.notes"
                                      rows="4"
                                      placeholder="Ceritakan gambaran website atau tema undangan impian yang Anda inginkan..."
                                      class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"></textarea>
                        </div>

                        <button type="submit"
                                class="w-full py-4 px-6 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-xl shadow-blue-500/25 hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                            <span>Kirim & Konsultasi via WhatsApp</span>
                            <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-layouts.app>
