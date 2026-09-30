<x-layouts.admin>
    @php
        $breadcrumb = 'Website Bisnis';
    @endphp

    <div x-data="{
        createModalOpen: false,
        editModalOpen: false,
        editProject: {
            id: null,
            client_name: '',
            client_phone: '',
            project_name: '',
            category: 'Company Profile',
            package_name: 'Business Pro',
            domain: '',
            price: 999000,
            status: 'in_progress',
            deadline: '',
            notes: ''
        },
        openEdit(project) {
            this.editProject = { ...project };
            this.editModalOpen = true;
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
                    Manajemen Proyek Website Bisnis
                </h1>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    Kelola seluruh website company profile, landing page, dan toko online klien dari satu panel terintegrasi.
                </p>
            </div>

            <button @click="createModalOpen = true"
                    type="button"
                    class="px-5 py-2.5 rounded-xl font-bold text-xs text-white bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/25 hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Tambah Proyek Baru</span>
            </button>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block mb-1">Total Proyek</span>
                <span class="text-2xl sm:text-3xl font-black text-slate-900">{{ $stats['total'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Seluruh website tercatat</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 block mb-1">Dalam Pengerjaan</span>
                <span class="text-2xl sm:text-3xl font-black text-blue-600">{{ $stats['in_progress'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Sedang aktif digarap</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block mb-1">Menunggu Review</span>
                <span class="text-2xl sm:text-3xl font-black text-amber-600">{{ $stats['review'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Revisi / approval klien</span>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-blue-100 shadow-sm">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 block mb-1">Website Online</span>
                <span class="text-2xl sm:text-3xl font-black text-emerald-600">{{ $stats['online'] }}</span>
                <span class="text-[11px] text-slate-400 block mt-1">Selesai & aktif di internet</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-blue-100 shadow-sm">
            <form method="GET" action="{{ route('admin.websites.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">

                <div class="sm:col-span-5 relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari nama klien, proyek, domain, no. telp..."
                           class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs placeholder:text-slate-400 focus:bg-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-all">
                </div>

                <div class="sm:col-span-3">
                    <select name="status"
                            onchange="this.form.submit()"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs focus:bg-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-all">
                        <option value="all" {{ request('status') === 'all' || !request('status') ? 'selected' : '' }}>Semua Status</option>
                        <option value="in_progress" {{ request('status') === 'in_progress' ? 'selected' : '' }}>Dalam Pengerjaan</option>
                        <option value="review" {{ request('status') === 'review' ? 'selected' : '' }}>Menunggu Review</option>
                        <option value="online" {{ request('status') === 'online' ? 'selected' : '' }}>Website Online</option>
                        <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Tertunda (Pending)</option>
                    </select>
                </div>

                <div class="sm:col-span-3">
                    <select name="category"
                            onchange="this.form.submit()"
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 text-xs focus:bg-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-all">
                        <option value="all" {{ request('category') === 'all' || !request('category') ? 'selected' : '' }}>Semua Kategori</option>
                        <option value="Company Profile" {{ request('category') === 'Company Profile' ? 'selected' : '' }}>Company Profile</option>
                        <option value="Landing Page" {{ request('category') === 'Landing Page' ? 'selected' : '' }}>Landing Page Iklan</option>
                        <option value="Toko Online" {{ request('category') === 'Toko Online' ? 'selected' : '' }}>Toko Online / Katalog</option>
                        <option value="Custom Web" {{ request('category') === 'Custom Web' ? 'selected' : '' }}>Custom Web Portal</option>
                    </select>
                </div>

                <div class="sm:col-span-1 flex gap-2">
                    <button type="submit" class="w-full py-2.5 px-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs transition-colors shadow-xs">
                        Filter
                    </button>
                    @if(request('search') || request('status') || request('category'))
                    <a href="{{ route('admin.websites.index') }}" title="Reset Filter" class="p-2.5 rounded-xl border border-slate-200 bg-slate-100 text-slate-500 hover:text-slate-800 flex items-center justify-center">
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
                            <th class="px-6 py-4 font-bold">Klien & Kontak</th>
                            <th class="px-6 py-4 font-bold">Nama Proyek & Kategori</th>
                            <th class="px-6 py-4 font-bold">Domain Website</th>
                            <th class="px-6 py-4 font-bold">Paket & Biaya</th>
                            <th class="px-6 py-4 font-bold">Status</th>
                            <th class="px-6 py-4 font-bold">Deadline</th>
                            <th class="px-6 py-4 font-bold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-600">
                        @forelse($projects as $p)
                        <tr class="hover:bg-blue-50/40 transition-colors">

                            <td class="px-6 py-4 font-medium">
                                <div class="font-bold text-slate-900 text-sm">{{ $p->client_name }}</div>
                                @if($p->client_phone)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $p->client_phone) }}" target="_blank" class="text-emerald-600 hover:underline flex items-center gap-1 mt-0.5 text-[11px] font-medium">
                                    <span>{{ $p->client_phone }}</span>
                                </a>
                                @else
                                <span class="text-slate-400 text-[11px]">-</span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <div class="font-bold text-slate-800">{{ $p->project_name }}</div>
                                <span class="inline-block mt-1 px-2 py-0.5 rounded-md text-[10px] font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                                    {{ $p->category }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                @if($p->domain)
                                <a href="https://{{ $p->domain }}" target="_blank" class="text-blue-600 hover:text-blue-700 hover:underline flex items-center gap-1 font-mono text-[11px] font-medium">
                                    <span>{{ $p->domain }}</span>
                                    <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                                @else
                                <span class="text-slate-400 italic text-[11px]">Belum diatur</span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <div class="font-semibold text-slate-900">{{ $p->formatted_price }}</div>
                                <div class="text-slate-400 text-[11px]">{{ $p->package_name }}</div>
                            </td>

                            <td class="px-6 py-4">
                                @if($p->status === 'online')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    <span>Website Online</span>
                                </span>
                                @elseif($p->status === 'in_progress')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                                    <span>Dalam Pengerjaan</span>
                                </span>
                                @elseif($p->status === 'review')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                    <span>Menunggu Review</span>
                                </span>
                                @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    <span>Tertunda (Pending)</span>
                                </span>
                                @endif
                            </td>

                            <td class="px-6 py-4 text-[11px] text-slate-500">
                                {{ $p->deadline ? $p->deadline->format('d M Y') : '-' }}
                            </td>

                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button type="button"
                                            @click="openEdit(@js($p))"
                                            class="p-1.5 rounded-lg border border-slate-200 hover:border-blue-400 text-slate-500 hover:text-blue-600 hover:bg-blue-50 transition-colors"
                                            title="Edit Proyek">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>

                                    <form action="{{ route('admin.websites.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek {{ $p->project_name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="p-1.5 rounded-lg border border-slate-200 hover:border-rose-400 text-slate-500 hover:text-rose-600 hover:bg-rose-50 transition-colors"
                                                title="Hapus Proyek">
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
                                        <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"></path></svg>
                                    </div>
                                    <p class="font-bold text-slate-600">Belum ada proyek website yang sesuai filter.</p>
                                    <p class="text-xs text-slate-400">Klik tombol "Tambah Proyek Baru" untuk memasukkan proyek pertama.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($projects->hasPages())
            <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                {{ $projects->links() }}
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
                     class="relative transform overflow-hidden rounded-3xl bg-white border border-blue-100 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-xl p-6 sm:p-8">

                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">+ Tambah Proyek Website Baru</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Masukkan data klien dan detail pengerjaan website</p>
                        </div>
                        <button @click="createModalOpen = false" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg">✕</button>
                    </div>

                    <form action="{{ route('admin.websites.store') }}" method="POST" class="space-y-4 text-xs">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Nama Klien / Pemilik *</label>
                                <input type="text" name="client_name" required placeholder="Contoh: Bpk. Hendra" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Nomor WhatsApp</label>
                                <input type="text" name="client_phone" placeholder="Contoh: 08123456789" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Nama Proyek / Bisnis *</label>
                            <input type="text" name="project_name" required placeholder="Contoh: Nirvana Coffee & Roastery" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Kategori Website *</label>
                                <select name="category" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="Company Profile">Company Profile</option>
                                    <option value="Landing Page">Landing Page Iklan</option>
                                    <option value="Toko Online">Toko Online / Katalog</option>
                                    <option value="Custom Web">Custom Web Portal</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Paket Pilihan *</label>
                                <select name="package_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="Landing Page Express">Landing Page Express</option>
                                    <option value="Business Pro" selected>Business Pro</option>
                                    <option value="Toko Online Katalog">Toko Online Katalog</option>
                                    <option value="Custom Portal">Custom Portal</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Domain Target (Opsional)</label>
                                <input type="text" name="domain" placeholder="Contoh: bisnisklien.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Biaya / Total Harga (Rp) *</label>
                                <input type="number" name="price" required value="999000" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Status Pengerjaan *</label>
                                <select name="status" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="in_progress">Dalam Pengerjaan</option>
                                    <option value="review">Menunggu Review Klien</option>
                                    <option value="online">Website Online</option>
                                    <option value="pending">Tertunda (Pending)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Target Deadline</label>
                                <input type="date" name="deadline" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Catatan Tambahan</label>
                            <textarea name="notes" rows="2" placeholder="Catatan brief, request warna, kontak teknis..." class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                            <button type="button" @click="createModalOpen = false" class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100">Batal</button>
                            <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-blue-600 hover:bg-blue-700 shadow-md shadow-blue-500/25">Simpan Proyek</button>
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
                     class="relative transform overflow-hidden rounded-3xl bg-white border border-blue-100 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-xl p-6 sm:p-8">

                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">Edit Proyek Website</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Perbarui status, domain, atau data klien</p>
                        </div>
                        <button @click="editModalOpen = false" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg">✕</button>
                    </div>

                    <form :action="`{{ url('cms-admin/websites') }}/${editProject.id}`" method="POST" class="space-y-4 text-xs">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Nama Klien / Pemilik *</label>
                                <input type="text" name="client_name" required x-model="editProject.client_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Nomor WhatsApp</label>
                                <input type="text" name="client_phone" x-model="editProject.client_phone" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Nama Proyek / Bisnis *</label>
                            <input type="text" name="project_name" required x-model="editProject.project_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Kategori Website *</label>
                                <select name="category" x-model="editProject.category" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="Company Profile">Company Profile</option>
                                    <option value="Landing Page">Landing Page Iklan</option>
                                    <option value="Toko Online">Toko Online / Katalog</option>
                                    <option value="Custom Web">Custom Web Portal</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Paket Pilihan *</label>
                                <select name="package_name" x-model="editProject.package_name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="Landing Page Express">Landing Page Express</option>
                                    <option value="Business Pro">Business Pro</option>
                                    <option value="Toko Online Katalog">Toko Online Katalog</option>
                                    <option value="Custom Portal">Custom Portal</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Domain Target</label>
                                <input type="text" name="domain" x-model="editProject.domain" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Biaya / Total Harga (Rp) *</label>
                                <input type="number" name="price" required x-model="editProject.price" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Status Pengerjaan *</label>
                                <select name="status" x-model="editProject.status" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                                    <option value="in_progress">Dalam Pengerjaan</option>
                                    <option value="review">Menunggu Review Klien</option>
                                    <option value="online">Website Online</option>
                                    <option value="pending">Tertunda (Pending)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block font-bold text-slate-700 mb-1">Target Deadline</label>
                                <input type="date" name="deadline" x-model="editProject.deadline" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Catatan Tambahan</label>
                            <textarea name="notes" rows="2" x-model="editProject.notes" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 bg-slate-50 text-slate-900 focus:bg-white focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                            <button type="button" @click="editModalOpen = false" class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100">Batal</button>
                            <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-blue-600 hover:bg-blue-700 shadow-md shadow-blue-500/25">Simpan Perubahan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</x-layouts.admin>
