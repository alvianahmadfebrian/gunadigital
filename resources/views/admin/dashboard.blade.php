<x-layouts.admin>

    <div class="relative rounded-3xl p-6 sm:p-8 overflow-hidden bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 text-white shadow-xl shadow-blue-500/15 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div class="space-y-2 z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-white/20 text-white backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Selamat Datang di Panel CMS</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                Halo, {{ $user->name }}
            </h1>
            <p class="text-xs sm:text-sm text-blue-100 max-w-xl leading-relaxed">
                Kelola portofolio website, data undangan digital aktif, pantau pesan konsultasi masuk, dan sesuaikan paket harga jasa Anda dari satu tempat.
            </p>
        </div>

        <div class="flex items-center gap-3 z-10">
            <a href="{{ route('home') }}"
               target="_blank"
               class="px-5 py-2.5 rounded-xl bg-white hover:bg-blue-50 text-blue-700 font-bold text-xs shadow-lg hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <span>Lihat Landing Page</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($metrics as $m)
        <div class="bg-white rounded-2xl p-6 border border-blue-100 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500">{{ $m['title'] }}</span>
                <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200">
                    {{ $m['growth'] }}
                </span>
            </div>
            <div class="flex items-baseline justify-between">
                <span class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    {{ $m['value'] }}
                </span>
                <span class="text-xs text-slate-400 font-medium">Bulan Ini</span>
            </div>
        </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        <div class="lg:col-span-8 space-y-8">

            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-blue-100 shadow-sm space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">Proyek Pembuatan Website Aktif</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Daftar klien yang sedang dalam proses desain dan pengembangan</p>
                    </div>
                    <a href="{{ route('admin.websites.index') }}" class="px-3 py-1.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs transition-colors shadow-xs">
                        Kelola Semua Website &rarr;
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-slate-400 border-b border-slate-100">
                                <th class="pb-3 font-semibold uppercase tracking-wider">Klien / Bisnis</th>
                                <th class="pb-3 font-semibold uppercase tracking-wider">Paket</th>
                                <th class="pb-3 font-semibold uppercase tracking-wider">Domain</th>
                                <th class="pb-3 font-semibold uppercase tracking-wider">Status</th>
                                <th class="pb-3 font-semibold uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-600">
                            @forelse($recentWebsites as $rw)
                            <tr>
                                <td class="py-3.5 font-bold text-slate-900">{{ $rw->client_name }}</td>
                                <td class="py-3.5">{{ $rw->package_name }}</td>
                                <td class="py-3.5 text-blue-600 font-mono font-medium">{{ $rw->domain ?? '-' }}</td>
                                <td class="py-3.5">
                                    @if($rw->status === 'online')
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">Online</span>
                                    @elseif($rw->status === 'in_progress')
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-blue-50 text-blue-700 border border-blue-200">Pengerjaan</span>
                                    @elseif($rw->status === 'review')
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-amber-50 text-amber-700 border border-amber-200">Review</span>
                                    @else
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-600 border border-slate-200">Pending</span>
                                    @endif
                                </td>
                                <td class="py-3.5 text-right">
                                    <a href="{{ route('admin.websites.index', ['search' => $rw->client_name]) }}" class="text-blue-600 font-semibold hover:underline">Detail</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-6 text-center text-slate-400">Belum ada data proyek.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-blue-100 shadow-sm space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">Undangan Digital yang Sedang Aktif</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Pantau masa aktif dan respons RSVP pernikahan klien</p>
                    </div>
                    <a href="{{ route('admin.invitations.index') }}" class="px-3 py-1.5 rounded-xl bg-pink-600 hover:bg-pink-700 text-white font-bold text-xs transition-colors shadow-xs">
                        Kelola Semua Undangan &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @forelse($recentInvitations as $ri)
                    <div class="p-4 rounded-2xl bg-slate-50/80 border border-slate-200 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-pink-700">{{ $ri->display_couple }}</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-pink-50 text-pink-700 border border-pink-200">{{ $ri->package_name }}</span>
                        </div>
                        <p class="text-xs text-slate-600">
                            {{ $ri->event_date ? 'Tanggal Acara: '.$ri->event_date->format('d M Y') : 'Lokasi: '.($ri->location_name ?? '-') }}
                        </p>
                        <div class="pt-2 flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-200">
                            <span>RSVP: {{ $ri->rsvp_count }} Tamu Hadir</span>
                            <a href="{{ route('admin.invitations.index', ['search' => $ri->groom_name]) }}" class="text-pink-600 font-semibold hover:underline">Lihat Detail &rarr;</a>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-2 py-6 text-center text-slate-400 text-xs">
                        Belum ada data undangan digital.
                    </div>
                    @endforelse
                </div>
            </div>

        </div>

        <div class="lg:col-span-4 space-y-8">

            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-blue-100 shadow-sm space-y-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-base font-bold text-slate-900">Leads Konsultasi Masuk</h2>
                        <span class="text-[11px] font-semibold text-emerald-600">12 Formulir Baru</span>
                    </div>
                    <span class="w-8 h-8 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </span>
                </div>

                <div class="space-y-3">
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-1">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-900">Budi Santoso</span>
                            <span class="text-[10px] text-slate-400">10 mnt lalu</span>
                        </div>
                        <span class="block text-[11px] font-semibold text-blue-600">Website Toko Online (Rp 1-3 Jt)</span>
                        <p class="text-[11px] text-slate-600 truncate">"Mau bikin toko online baju gamis dengan checkout WA"</p>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-1">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-900">dr. Anggita Putri</span>
                            <span class="text-[10px] text-slate-400">45 mnt lalu</span>
                        </div>
                        <span class="block text-[11px] font-semibold text-pink-600">Undangan Wedding Gold</span>
                        <p class="text-[11px] text-slate-600 truncate">"Untuk pernikahan bulan depan butuh lagu dan amplop QRIS"</p>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-1">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-900">PT Mega Mandiri</span>
                            <span class="text-[10px] text-slate-400">2 jam lalu</span>
                        </div>
                        <span class="block text-[11px] font-semibold text-blue-600">Company Profile Pro</span>
                        <p class="text-[11px] text-slate-600 truncate">"Kebutuhan profil perusahaan untuk tender BUMN"</p>
                    </div>
                </div>

                <button class="w-full py-2.5 px-4 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 text-xs font-bold text-slate-700 transition-colors">
                    Lihat Semua Pesan Masuk &rarr;
                </button>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-7 border border-blue-100 shadow-sm space-y-4">
                <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Aksi Cepat Admin</h3>
                <div class="space-y-2 text-xs">
                    <a href="{{ route('home') }}#harga" target="_blank" class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-blue-300 text-slate-700 hover:text-blue-600 transition-all">
                        <span>Update Paket Harga di Web</span>
                        <span class="text-slate-400">&rarr;</span>
                    </a>
                    <a href="{{ route('home') }}#portofolio" target="_blank" class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-pink-300 text-slate-700 hover:text-pink-600 transition-all">
                        <span>Upload Portofolio Baru</span>
                        <span class="text-slate-400">&rarr;</span>
                    </a>
                    <a href="{{ route('home') }}#faq" target="_blank" class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-cyan-300 text-slate-700 hover:text-cyan-600 transition-all">
                        <span>Edit Pertanyaan FAQ</span>
                        <span class="text-slate-400">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</x-layouts.admin>
