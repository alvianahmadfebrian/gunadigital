<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\InvitationProject;
use Illuminate\Database\Seeder;

class InvitationProjectSeeder extends Seeder
{
    public function run(): void
    {
        $invitations = [
            [
                'title' => 'The Wedding of Rama & Shinta',
                'groom_name' => 'Rama',
                'bride_name' => 'Shinta',
                'client_phone' => '081211223344',
                'event_type' => 'Pernikahan (Wedding)',
                'package_name' => 'Gold (Best Seller)',
                'slug' => 'rama-shinta',
                'custom_domain' => null,
                'event_date' => now()->addDays(48),
                'location_name' => 'Gedung Puri Ardhya Garini, Halim, Jakarta Timur',
                'price' => 179000,
                'rsvp_count' => 148,
                'music_title' => 'A Thousand Years - Christina Perri',
                'status' => 'active',
                'notes' => 'Tema Rustic Gold, amplop digital BCA & QRIS aktif.',
            ],
            [
                'title' => 'The Royal Wedding of Dimas & Citra',
                'groom_name' => 'Dimas',
                'bride_name' => 'Citra',
                'client_phone' => '081399887766',
                'event_type' => 'Pernikahan (Wedding)',
                'package_name' => 'Platinum Custom',
                'slug' => 'dimas-citra',
                'custom_domain' => 'dimas-citra.com',
                'event_date' => now()->addDays(20),
                'location_name' => 'Grand Ballroom Hotel Mulia Senayan, Jakarta',
                'price' => 299000,
                'rsvp_count' => 230,
                'music_title' => 'Marry Your Daughter - Brian McKnight',
                'status' => 'active',
                'notes' => 'Domain khusus dimas-citra.com, galeri video prewedding sinematik.',
            ],
            [
                'title' => 'Syukuran Walimatul Khitan Rayyan Al-Ghifari',
                'groom_name' => 'Muhammad Rayyan',
                'bride_name' => null,
                'client_phone' => '085711223344',
                'event_type' => 'Walimatul Khitan',
                'package_name' => 'Silver / Lite',
                'slug' => 'khitan-rayyan',
                'custom_domain' => null,
                'event_date' => now()->addDays(12),
                'location_name' => 'Masjid Raya Al-Ikhlas, Bekasi',
                'price' => 99000,
                'rsvp_count' => 64,
                'music_title' => 'Instrumen Gambus Sholawat Modern',
                'status' => 'active',
                'notes' => 'Doa dan ucapan buku tamu interaktif.',
            ],
            [
                'title' => 'The Wedding of Fajar & Nabila',
                'groom_name' => 'Fajar',
                'bride_name' => 'Nabila',
                'client_phone' => '082233445566',
                'event_type' => 'Pernikahan (Wedding)',
                'package_name' => 'Gold (Best Seller)',
                'slug' => 'fajar-nabila',
                'custom_domain' => null,
                'event_date' => now()->addDays(60),
                'location_name' => 'Graha Batununggal Indah, Bandung',
                'price' => 179000,
                'rsvp_count' => 112,
                'music_title' => 'Kisah Romantis - Glenn Fredly',
                'status' => 'draft',
                'notes' => 'Menunggu review foto galeri dari fotografer.',
            ],
            [
                'title' => 'Annual Corporate Gala & Awarding Night',
                'groom_name' => 'PT Mega Mandiri Group',
                'bride_name' => null,
                'client_phone' => '081122334455',
                'event_type' => 'Event Korporat',
                'package_name' => 'Platinum Custom',
                'slug' => 'gala-megamandiri-2026',
                'custom_domain' => null,
                'event_date' => now()->addDays(35),
                'location_name' => 'Grand Ballroom Pullman Hotel Central Park, Jakarta',
                'price' => 350000,
                'rsvp_count' => 95,
                'music_title' => 'Corporate Inspiring Ambient Music',
                'status' => 'active',
                'notes' => 'QR Code absensi scan tamu di resepsionis.',
            ],
        ];

        foreach ($invitations as $inv) {
            InvitationProject::updateOrCreate(
                ['slug' => $inv['slug']],
                $inv
            );
        }
    }
}
