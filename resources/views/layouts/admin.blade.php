<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Dashboard - CMS Admin GunaDigital' }}</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logologo.png') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen relative overflow-x-hidden selection:bg-blue-600 selection:text-white"
      x-data="{
          sidebarOpen: false,
          sidebarCollapsed: false
      }">

    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="ambient-glow-indigo w-[600px] h-[600px] -top-32 -left-20 opacity-20"></div>
        <div class="ambient-glow-pink w-[500px] h-[500px] top-[40%] -right-20 opacity-10"></div>
    </div>

    <div class="relative z-10 flex min-h-screen">

        <div x-show="sidebarOpen"
             x-transition:enter="transition-opacity ease-linear duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sidebarOpen = false"
             class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-40 lg:hidden"
             style="display: none;"></div>

        <aside :class="{
                   'translate-x-0': sidebarOpen,
                   '-translate-x-full lg:translate-x-0': !sidebarOpen,
                   'lg:w-72': !sidebarCollapsed,
                   'lg:w-20': sidebarCollapsed
               }"
               class="fixed inset-y-0 left-0 z-50 flex flex-col bg-white/95 lg:bg-white/90 backdrop-blur-2xl border-r border-blue-100 shadow-sm transition-all duration-300 w-72">

            <div class="flex items-center justify-between h-20 px-6 border-b border-blue-100">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center group overflow-hidden">
                    <img src="{{ asset('images/logologo.png') }}?v={{ filemtime(public_path('images/logologo.png')) }}" alt="GunaDigital" class="h-10 w-auto max-w-[180px] object-contain group-hover:scale-105 transition-transform" :class="sidebarCollapsed ? 'max-w-[36px] object-left object-cover' : ''">
                </a>

                <button @click="sidebarOpen = false"
                        type="button"
                        class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 hover:bg-slate-100 lg:hidden">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex-grow overflow-y-auto px-4 py-6 space-y-6 hide-scrollbar">

                <div class="space-y-1">
                    <span class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2" x-show="!sidebarCollapsed">
                        Menu Utama
                    </span>

                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-medium text-sm transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white font-semibold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/80' }}">
                        <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-slate-400 group-hover:text-slate-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Dashboard</span>
                    </a>
                </div>

                <div class="space-y-1">
                    <span class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2" x-show="!sidebarCollapsed">
                        Layanan & Proyek
                    </span>

                    <a href="{{ route('admin.websites.index') }}"
                       class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all {{ request()->routeIs('admin.websites.*') ? 'bg-blue-600 text-white font-semibold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/80' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.websites.*') ? 'text-white' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed">Website Bisnis</span>
                        </div>
                        <span x-show="!sidebarCollapsed" class="px-2 py-0.5 rounded-md text-[10px] font-medium {{ request()->routeIs('admin.websites.*') ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' }}">
                            {{ \App\Models\WebsiteProject::count() }}
                        </span>
                    </a>

                    <a href="{{ route('admin.invitations.index') }}"
                       class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all {{ request()->routeIs('admin.invitations.*') ? 'bg-blue-600 text-white font-semibold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/80' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.invitations.*') ? 'text-white' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed">Undangan Digital</span>
                        </div>
                        <span x-show="!sidebarCollapsed" class="px-2 py-0.5 rounded-md text-[10px] font-medium {{ request()->routeIs('admin.invitations.*') ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' }}">
                            {{ \App\Models\InvitationProject::count() }}
                        </span>
                    </a>

                    <a href="#katalog-portofolio"
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-colors">
                        <svg class="w-5 h-5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Portofolio & Tema</span>
                    </a>
                </div>

                <div class="space-y-1">
                    <span class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2" x-show="!sidebarCollapsed">
                        Pemesanan & Interaksi
                    </span>

                    <a href="#pesan-masuk"
                       class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-colors">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed">Pesan Konsultasi</span>
                        </div>
                        <span x-show="!sidebarCollapsed" class="px-2 py-0.5 rounded-full text-[10px] font-medium bg-slate-100 text-slate-600">
                            12
                        </span>
                    </a>

                    <a href="#paket-harga"
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-colors">
                        <svg class="w-5 h-5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Kelola Paket Harga</span>
                    </a>
                </div>

                <div class="space-y-1">
                    <span class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2" x-show="!sidebarCollapsed">
                        Pengaturan & Konten
                    </span>

                    <a href="#testimoni-faq"
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-colors">
                        <svg class="w-5 h-5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Testimoni & FAQ</span>
                    </a>

                    <a href="#pengaturan-profil"
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-colors">
                        <svg class="w-5 h-5 shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Akun & Pengaturan</span>
                    </a>
                </div>

            </div>

            <div class="p-4 border-t border-blue-100 bg-slate-50/70">
                <div class="flex items-center justify-between gap-3">
                    <div class="flex items-center gap-3 overflow-hidden">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center font-bold text-white shrink-0 shadow-sm">
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        </div>
                        <div class="overflow-hidden" x-show="!sidebarCollapsed">
                            <span class="block text-xs font-bold text-slate-800 truncate">{{ auth()->user()->name ?? 'Administrator' }}</span>
                            <span class="block text-[11px] text-slate-500 truncate">{{ auth()->user()->email ?? 'admin@gunadigital.id' }}</span>
                        </div>
                    </div>

                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                title="Keluar dari Akun CMS"
                                class="p-2 rounded-xl border border-slate-200 hover:border-rose-300 text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </aside>

        <div :class="{
                 'lg:pl-72': !sidebarCollapsed,
                 'lg:pl-20': sidebarCollapsed
             }"
             class="flex-1 flex flex-col min-h-screen transition-all duration-300">

            <header class="sticky top-0 z-30 w-full bg-white/80 border-b border-blue-100 backdrop-blur-xl shadow-xs">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-20">

                        <div class="flex items-center gap-4">

                            <button @click="sidebarOpen = true"
                                    type="button"
                                    class="p-2.5 rounded-xl border border-slate-200 text-slate-600 hover:text-slate-900 hover:bg-slate-100 lg:hidden">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>

                            <button @click="sidebarCollapsed = !sidebarCollapsed"
                                    type="button"
                                    title="Ciutkan / Lebarkan Sidebar"
                                    class="hidden lg:flex p-2.5 rounded-xl border border-slate-200 text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h10M4 18h16"></path>
                                </svg>
                            </button>

                            <div class="hidden sm:flex items-center gap-2 text-xs text-slate-500">
                                <span>GunaDigital CMS</span>
                                <span>/</span>
                                <span class="font-bold text-slate-900">{{ $breadcrumb ?? 'Dashboard' }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="{{ route('home') }}"
                               target="_blank"
                               class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-blue-200 bg-blue-50/70 hover:bg-blue-100 text-xs font-bold text-blue-700 shadow-xs transition-all">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                <span>Lihat Website Depan</span>
                            </a>

                            <div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-semibold">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span>CMS Siap Pakai</span>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <main class="flex-grow p-4 sm:p-6 lg:p-8 space-y-8">
                {{ $slot }}
            </main>

            <footer class="border-t border-blue-100 px-4 sm:px-6 lg:px-8 py-5 text-center sm:text-left flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-slate-500 bg-white">
                <p>&copy; {{ date('Y') }} GunaDigital. Hak Cipta Dilindungi.</p>
                <p>Login sebagai: <strong class="text-slate-700">{{ auth()->user()->email ?? 'admin@gunadigital.id' }}</strong></p>
            </footer>

        </div>

    </div>

</body>
</html>
