<x-layouts.admin>
    @php
        $breadcrumb = 'Undangan Digital';
    @endphp

    <div x-data="{
        createModalOpen: false,
        editModalOpen: false,
        editInv: {
            id: null,
            title: '',
            groom_name: '',
            bride_name: '',
            client_phone: '',
            event_type: 'Pernikahan (Wedding)',
            package_name: 'Gold (Best Seller)',
            slug: '',
            custom_domain: '',
            event_date: '',
            location_name: '',
            price: 179000,
            rsvp_count: 0,
            music_title: '',
            status: 'active',
            notes: ''
        },
        openEdit(inv) {
            this.editInv = { ...inv };
            this.editModalOpen = true;
        },
        copyLink(url) {
            navigator.clipboard.writeText(url);
            alert('Tautan undangan berhasil disalin ke clipboard: ' + url);
        }
    }" class="space-y-8">

        @if(session('success'))
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs flex items-center justify-between shadow-xs">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        </div>
        @endif

        @if($errors->any())
        <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-700 text-xs space-y-1">
            <div class="font-bold">Ada kesalahan input:</div>
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Manajemen Undangan Digital
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    Kelola data pernikahan, khitanan, tautan personalisasi nama tamu, musik latar, serta rekap RSVP.
                </p>
            </div>

            <button @click="createModalOpen = true"
                    type="button"
                    class="px-5 py-2.5 rounded-xl font-bold text-xs text-white bg-pink-600 hover:bg-pink-700 shadow-lg shadow-pink-500/25 hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Buat Undangan Baru</span>
            </button>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block mb-1">Total Undangan</span>
                <span class="text-2xl sm:text-3xl font-black text-slate-900">{{ $stats['total'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Semua acara terdaftar</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-pink-600 block mb-1">Aktif Tayang</span>
                <span class="text-2xl sm:text-3xl font-black text-pink-600">{{ $stats['active'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Siap disebar ke tamu</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block mb-1">Draft / Desain</span>
                <span class="text-2xl sm:text-3xl font-black text-amber-600">{{ $stats['draft'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Menunggu approval</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 block mb-1">Total RSVP Masuk</span>
                <span class="text-2xl sm:text-3xl font-black text-emerald-600">{{ number_format($stats['total_rsvp']) }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Tamu konfirmasi hadir</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-blue-100 shadow-sm">
            <form method="GET" action="{{ route('admin.invitations.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">

                <div class="sm:col-span-5 relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari nama mempelai, judul, link slug, gedung..."
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs placeholder:text-slate-400 focus:bg-white focus:border-pink-500 focus:ring-1 focus:ring-pink-500 focus:outline-none transition-all">
                </div>

                <div class="sm:col-span-3">
                    <select name="status"
                            onchange="this.form.submit()"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs focus:bg-white focus:border-pink-500 focus:ring-1 focus:ring-pink-500 focus:outline-none transition-all">
                        <option value="all" {{ request('status') === 'all' || !request('status') ? 'selected' : '' }}>Semua Status</option>
                        <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Aktif Tayang</option>
                        <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft / Menunggu</option>
                        <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Acara Selesai</option>
                        <option value="expired" {{ request('status') === 'expired' ? 'selected' : '' }}>Masa Aktif Habis</option>
                    </select>
                </div>

                <div class="sm:col-span-3">
                    <select name="event_type"
                            onchange="this.form.submit()"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs focus:bg-white focus:border-pink-500 focus:ring-1 focus:ring-pink-500 focus:outline-none transition-all">
                        <option value="all" {{ request('event_type') === 'all' || !request('event_type') ? 'selected' : '' }}>Semua Jenis Acara</option>
                        <option value="Pernikahan (Wedding)" {{ request('event_type') === 'Pernikahan (Wedding)' ? 'selected' : '' }}>Pernikahan (Wedding)</option>
                        <option value="Walimatul Khitan" {{ request('event_type') === 'Walimatul Khitan' ? 'selected' : '' }}>Walimatul Khitan</option>
                        <option value="Ulang Tahun / Milad" {{ request('event_type') === 'Ulang Tahun / Milad' ? 'selected' : '' }}>Ulang Tahun / Milad</option>
                        <option value="Event Korporat" {{ request('event_type') === 'Event Korporat' ? 'selected' : '' }}>Event Korporat</option>
                    </select>
                </div>

                <div class="sm:col-span-1 flex gap-2">
                    <button type="submit" class="w-full py-2.5 px-3 rounded-xl bg-pink-600 hover:bg-pink-700 text-white font-bold text-xs transition-colors shadow-xs">
                        Filter
                    </button>
                    @if(request('search') || request('status') || request('event_type'))
                    <a href="{{ route('admin.invitations.index') }}" title="Reset Filter" class="p-2.5 rounded-xl border border-slate-200 bg-slate-100 text-slate-500 hover:text-slate-800 flex items-center justify-center">
                        ✕
                    </a>
                    @endif
                </div>
            </form>
        </div>

        <div class="bg-white rounded-3xl border border-blue-100 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="text-slate-500 uppercase tracking-wider text-[11px] border-b border-slate-100 bg-slate-50/70">
                            <th class="px-6 py-4 font-bold">Mempelai / Acara</th>
                            <th class="px-6 py-4 font-bold">Jenis & Paket</th>
                            <th class="px-6 py-4 font-bold">Tautan Undangan (Slug / Domain)</th>
                            <th class="px-6 py-4 font-bold">Musik & RSVP</th>
                            <th class="px-6 py-4 font-bold">Tanggal & Lokasi</th>
                            <th class="px-6 py-4 font-bold">Status</th>
                            <th class="px-6 py-4 font-bold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-600">
                        @forelse($invitations as $inv)
                        <tr class="hover:bg-pink-50/40 transition-colors">

                            <td class="px-6 py-4">
                                <div class="font-bold text-slate-900 text-sm">{{ $inv->display_couple }}</div>
                                <div class="text-slate-500 text-[11px] truncate max-w-[200px]">{{ $inv->title }}</div>
                                @if($inv->client_phone)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inv->client_phone) }}" target="_blank" class="text-emerald-600 hover:underline inline-flex items-center gap-1 mt-1 text-[10px] font-medium">
                                    <span>{{ $inv->client_phone }}</span>
                                </a>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <span class="inline-block px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-pink-50 text-pink-700 border border-pink-200">
                                    {{ $inv->event_type }}
                                </span>
                                <div class="text-slate-800 font-semibold mt-1">{{ $inv->package_name }}</div>
                                <div class="text-slate-400 text-[11px]">{{ $inv->formatted_price }}</div>
                            </td>

                            <td class="px-6 py-4">
                                @php
                                    $link = $inv->custom_domain ? "https://{$inv->custom_domain}" : url("/undangan/{$inv->slug}");
                                @endphp
                                <div class="flex items-center gap-1.5 font-mono text-[11px]">
                                    @if($inv->custom_domain)
                                    <span class="text-amber-700 font-semibold">{{ $inv->custom_domain }}</span>
                                    @else
                                    <span class="text-pink-600 font-medium">/undangan/{{ $inv->slug }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-2 mt-1">
                                    <button type="button" @click="copyLink('{{ $link }}')" class="text-[10px] text-slate-500 hover:text-slate-900 flex items-center gap-1 hover:underline">
                                        <span>Salin Link</span>
                                    </button>
                                    <a href="{{ $link }}" target="_blank" class="text-[10px] text-blue-600 hover:text-blue-700 hover:underline flex items-center gap-0.5">
                                        <span>Buka ↗</span>
                                    </a>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1 text-[11px] text-slate-700 truncate max-w-[170px]" title="{{ $inv->music_title }}">
                                    <svg class="w-3 h-3 text-pink-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/></svg>
                                    <span class="truncate">{{ $inv->music_title ?? 'Tanpa Musik' }}</span>
                                </div>
                                <div class="mt-1">
                                    <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        {{ $inv->rsvp_count }} Tamu Konfirmasi
                                    </span>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="font-semibold text-slate-900 text-[11px]">
                                    {{ $inv->event_date ? $inv->event_date->format('d M Y') : 'Belum diatur' }}
                                </div>
                                <div class="text-slate-500 text-[10px] truncate max-w-[170px] mt-0.5" title="{{ $inv->location_name }}">
                                    {{ $inv->location_name ?? '-' }}
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                @if($inv->status === 'active')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    <span>Aktif Tayang</span>
                                </span>
                                @elseif($inv->status === 'draft')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                    <span>Draft / Desain</span>
                                </span>
                                @elseif($inv->status === 'completed')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-cyan-50 text-cyan-700 border border-cyan-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-500"></span>
                                    <span>Acara Selesai</span>
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    <span>Kedaluwarsa</span>
                                </span>
                                @endif
                            </td>

                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button type="button"
                                            @click="openEdit(@js($inv))"
                                            class="p-1.5 rounded-lg border border-slate-200 hover:border-pink-400 text-slate-500 hover:text-pink-600 hover:bg-pink-50 transition-colors"
                                            title="Edit Undangan">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>

                                    <form action="{{ route('admin.invitations.destroy', $inv->id) }}" method="POST" onsubmit="return confirm('Hapus data undangan {{ $inv->display_couple }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="p-1.5 rounded-lg border border-slate-200 hover:border-rose-400 text-slate-500 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                                title="Hapus Undangan">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-slate-400">
                                <div class="space-y-2">
                                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center mx-auto">
                                        <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                    </div>
                                    <p class="font-bold text-slate-600">Belum ada data undangan yang cocok dengan filter.</p>
                                    <p class="text-xs text-slate-400">Klik tombol "Buat Undangan Baru" untuk membuat undangan digital pertama.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($invitations->hasPages())
            <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                {{ $invitations->links() }}
            </div>
            @endif
        </div>

        <div x-show="createModalOpen"
             x-cloak
             class="fixed inset-0 z-50 overflow-y-auto"
             style="display: none;">
            <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" @click="createModalOpen = false"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div @click.away="createModalOpen = false"
                     x-show="createModalOpen"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="relative transform overflow-hidden rounded-3xl bg-white border border-blue-100 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl p-6 sm:p-8">

                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">+ Buat Undangan Digital Baru</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Lengkapi informasi mempelai, tanggal acara, dan musik pengiring</p>
                        </div>
                        <button @click="createModalOpen = false" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg">✕</button>
                    </div>

                    <form action="{{ route('admin.invitations.store') }}" method="POST" class="space-y-4 text-xs">
                        @csrf

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Judul Acara *</label>
                            <input type="text" name="title" required placeholder="Contoh: The Wedding of Rama & Shinta" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Mempelai Pria / Nama Utama *</label>
                                <input type="text" name="groom_name" required placeholder="Contoh: Rama Wijaya" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Mempelai Wanita (Kosongkan bila khitanan)</label>
                                <input type="text" name="bride_name" placeholder="Contoh: Shinta Lestari" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Jenis Acara *</label>
                                <select name="event_type" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="Pernikahan (Wedding)">Pernikahan (Wedding)</option>
                                    <option value="Walimatul Khitan">Walimatul Khitan</option>
                                    <option value="Ulang Tahun / Milad">Ulang Tahun / Milad</option>
                                    <option value="Event Korporat">Event Korporat</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Pilihan Paket *</label>
                                <select name="package_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="Silver / Lite">Silver / Lite (Rp 99.000)</option>
                                    <option value="Gold (Best Seller)" selected>Gold (Best Seller) (Rp 179.000)</option>
                                    <option value="Platinum Custom">Platinum Custom (Rp 299.000)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Kustom Slug URL (Opsional)</label>
                                <input type="text" name="slug" placeholder="Contoh: rama-shinta (otomatis jika kosong)" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500 font-mono">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Custom Domain Sendiri (Opsional)</label>
                                <input type="text" name="custom_domain" placeholder="Contoh: rama-shinta.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500 font-mono">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Tanggal Acara</label>
                                <input type="date" name="event_date" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Harga Undangan (Rp) *</label>
                                <input type="number" name="price" required value="179000" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Status Undangan *</label>
                                <select name="status" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="active">Aktif Tayang</option>
                                    <option value="draft">Draft / Desain</option>
                                    <option value="completed">Acara Selesai</option>
                                    <option value="expired">Masa Aktif Habis</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Musik Latar Romantis</label>
                                <input type="text" name="music_title" placeholder="Contoh: A Thousand Years - Christina Perri" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Nomor WhatsApp Pemesan</label>
                                <input type="text" name="client_phone" placeholder="Contoh: 08123456789" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Nama Gedung / Lokasi Acara</label>
                            <input type="text" name="location_name" placeholder="Contoh: Puri Ardhya Garini, Halim Perdanakusuma, Jakarta" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Catatan Tambahan</label>
                            <textarea name="notes" rows="2" placeholder="Catatan tema warna, nomor rekening amplop digital..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500"></textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                            <button type="button" @click="createModalOpen = false" class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100">Batal</button>
                            <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-pink-600 hover:bg-pink-700 shadow-md shadow-pink-500/25">Simpan Undangan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div x-show="editModalOpen"
             x-cloak
             class="fixed inset-0 z-50 overflow-y-auto"
             style="display: none;">
            <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" @click="editModalOpen = false"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div @click.away="editModalOpen = false"
                     x-show="editModalOpen"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="relative transform overflow-hidden rounded-3xl bg-white border border-blue-100 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl p-6 sm:p-8">

                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">Edit Undangan Digital</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Perbarui tanggal acara, status tayang, atau tautan slug</p>
                        </div>
                        <button @click="editModalOpen = false" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg">✕</button>
                    </div>

                    <form :action="`{{ url('cms-admin/invitations') }}/${editInv.id}`" method="POST" class="space-y-4 text-xs">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Judul Acara *</label>
                            <input type="text" name="title" required x-model="editInv.title" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Mempelai Pria / Nama Utama *</label>
                                <input type="text" name="groom_name" required x-model="editInv.groom_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Mempelai Wanita</label>
                                <input type="text" name="bride_name" x-model="editInv.bride_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Jenis Acara *</label>
                                <select name="event_type" x-model="editInv.event_type" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="Pernikahan (Wedding)">Pernikahan (Wedding)</option>
                                    <option value="Walimatul Khitan">Walimatul Khitan</option>
                                    <option value="Ulang Tahun / Milad">Ulang Tahun / Milad</option>
                                    <option value="Event Korporat">Event Korporat</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Pilihan Paket *</label>
                                <select name="package_name" x-model="editInv.package_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="Silver / Lite">Silver / Lite (Rp 99.000)</option>
                                    <option value="Gold (Best Seller)">Gold (Best Seller) (Rp 179.000)</option>
                                    <option value="Platinum Custom">Platinum Custom (Rp 299.000)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Slug URL *</label>
                                <input type="text" name="slug" required x-model="editInv.slug" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500 font-mono">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Custom Domain Sendiri</label>
                                <input type="text" name="custom_domain" x-model="editInv.custom_domain" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500 font-mono">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Tanggal Acara</label>
                                <input type="date" name="event_date" x-model="editInv.event_date" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Harga (Rp) *</label>
                                <input type="number" name="price" required x-model="editInv.price" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Status Undangan *</label>
                                <select name="status" x-model="editInv.status" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                                    <option value="active">Aktif Tayang</option>
                                    <option value="draft">Draft / Desain</option>
                                    <option value="completed">Acara Selesai</option>
                                    <option value="expired">Masa Aktif Habis</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Musik Latar</label>
                                <input type="text" name="music_title" x-model="editInv.music_title" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Konfirmasi RSVP (Tamu)</label>
                                <input type="number" name="rsvp_count" x-model="editInv.rsvp_count" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">WhatsApp Pemesan</label>
                                <input type="text" name="client_phone" x-model="editInv.client_phone" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Nama Gedung / Lokasi Acara</label>
                            <input type="text" name="location_name" x-model="editInv.location_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500">
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Catatan Tambahan</label>
                            <textarea name="notes" rows="2" x-model="editInv.notes" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-pink-500"></textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                            <button type="button" @click="editModalOpen = false" class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100">Batal</button>
                            <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-pink-600 hover:bg-pink-700 shadow-md shadow-pink-500/25">Simpan Perubahan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</x-layouts.admin>
