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
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,400,500,600,700,800|playfair-display:400,600,700,800|cinzel:400,600,700|cormorant-garamond:400,600,700,700i&display=swap" rel="stylesheet" />

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
</body>
</html>

