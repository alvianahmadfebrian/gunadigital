<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'GunaDigital - Jasa Pembuatan Website Profesional & Undangan Digital Elegan' }}</title>
    <meta name="description" content="Jasa pembuatan website profesional, company profile, landing page bisnis, dan undangan digital pernikahan interaktif dengan fitur RSVP WhatsApp, live maps, & amplop digital.">
    <meta name="keywords" content="jasa pembuatan website, jasa buat website, web undangan digital, undangan pernikahan online, company profile murah, landing page bisnis, website toko online">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="GunaDigital - Solusi Website & Undangan Digital Terbaik">
    <meta property="og:description" content="Bikin website bisnis & undangan digital pernikahan impianmu dengan desain mewah, pengerjaan cepat, dan harga bersahabat.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80">

    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logologo.png') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,400,500,600,700,800|playfair-display:400,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="landingApp" class="bg-gradient-to-b from-blue-50/60 via-white to-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white transition-colors duration-300 relative overflow-x-hidden min-h-screen">

    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="ambient-glow-blue w-[650px] h-[650px] -top-40 -left-20 opacity-70"></div>
        <div class="ambient-glow-sky w-[550px] h-[550px] top-[35%] -right-24 opacity-60"></div>
        <div class="ambient-glow-blue w-[700px] h-[700px] bottom-0 left-[20%] opacity-50"></div>
    </div>

    <div class="relative z-10 flex flex-col min-h-screen">

        @include('components.navbar')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @include('components.footer')
        @include('components.contact-modal')
    </div>

    <a href="https://wa.me/6281234567890?text=Halo%20GunaDigital,%20saya%20tertarik%20untuk%20konsultasi%20layanan%20Website%20/%20Undangan%20Digital"
       target="_blank"
       rel="noopener"
       aria-label="Chat WhatsApp"
       class="fixed bottom-6 right-6 z-40 group flex items-center gap-3 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-3 rounded-full shadow-xl shadow-emerald-500/25 hover:shadow-emerald-500/40 hover:-translate-y-1 transition-all duration-300">
        <div class="relative flex items-center justify-center">
            <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
            <svg class="w-6 h-6 fill-current relative" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.311.045-.698.059-1.146-.073-.308-.09-.692-.224-1.211-.448-2.222-.962-3.666-3.218-3.777-3.367-.112-.149-.906-1.205-.906-2.298 0-1.094.574-1.632.778-1.854.204-.222.446-.278.595-.278.149 0 .298.002.428.008.139.007.324-.053.506.386.19.459.648 1.58.705 1.694.057.114.095.247.019.398-.076.152-.114.247-.228.38-.114.133-.24.298-.343.4-.114.114-.233.238-.101.465.133.227.591.975 1.267 1.579.871.777 1.605 1.018 1.833 1.132.228.114.362.095.495-.057.133-.152.572-.666.724-.894.152-.228.305-.19.513-.114.209.076 1.32.622 1.548.736.228.114.38.171.437.266.057.095.057.552-.087.957z"/>
                <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10c-1.834 0-3.553-.497-5.034-1.365l-4.966 1.365 1.378-4.885c-.917-1.523-1.444-3.3-1.444-5.115 0-5.514 4.486-10 10-10zm0 2c-4.411 0-8 3.589-8 8 0 1.554.448 3.003 1.226 4.237l-.78 2.766 2.854-.751c1.196.728 2.593 1.148 4.07 1.148 4.411 0 8-3.589 8-8s-3.589-8-8-8z"/>
            </svg>
        </div>
        <div class="hidden sm:block text-left">
            <span class="block text-[11px] font-medium text-emerald-100 uppercase tracking-wider leading-tight">Fast Response</span>
            <span class="block text-sm font-bold tracking-tight">Tanya via WhatsApp</span>
        </div>
    </a>
</body>
</html>
