<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\WebsiteProject;
use Illuminate\Database\Seeder;

class WebsiteProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'client_name' => 'Proats Music Center Management',
                'client_phone' => '081234567890',
                'project_name' => 'Proats Music Center - Catalog Store',
                'category' => 'Toko Online',
                'package_name' => 'Custom Web',
                'domain' => 'catalog.proatsmusiccenter.com',
                'price' => 1899000,
                'status' => 'online',
                'deadline' => now()->subDays(10),
                'notes' => 'Platform katalog produk digital alat musik & instrumen modern.',
            ],
            [
                'client_name' => 'Proats Music Center Official',
                'client_phone' => '081234567891',
                'project_name' => 'Proats Music Center - Official Web',
                'category' => 'Company Profile',
                'package_name' => 'Business Pro',
                'domain' => 'proatsmusiccenter.com',
                'price' => 999000,
                'status' => 'online',
                'deadline' => now()->subDays(15),
                'notes' => 'Company profile resmi studio, pelatihan marching band & alat musik.',
            ],
            [
                'client_name' => 'E-Voters Indonesia',
                'client_phone' => '081234567892',
                'project_name' => 'E-Voters.id - Online E-Voting System',
                'category' => 'Custom Web',
                'package_name' => 'Custom Platform',
                'domain' => 'e-voters.id',
                'price' => 2999000,
                'status' => 'online',
                'deadline' => now()->subDays(5),
                'notes' => 'Platform sistem e-voting dan polling daring transparan realtime.',
            ],
            [
                'client_name' => 'dr. Sarah Amanda',
                'client_phone' => '081377889900',
                'project_name' => 'Glamour Glow Skin Clinic',
                'category' => 'Landing Page',
                'package_name' => 'Landing Page Express',
                'domain' => 'glamourglow.com',
                'price' => 499000,
                'status' => 'review',
                'deadline' => now()->addDays(2),
                'notes' => 'Landing page promo perawatan bulanan dan reservasi WhatsApp.',
            ],
            [
                'client_name' => 'Anisa Rahmawati',
                'client_phone' => '085712348765',
                'project_name' => 'Hijab Modern Boutique',
                'category' => 'Toko Online',
                'package_name' => 'Toko Online Katalog',
                'domain' => 'hijabmodernboutique.com',
                'price' => 1899000,
                'status' => 'online',
                'deadline' => now()->subDays(12),
                'notes' => 'Katalog 50+ produk dengan checkout langsung WhatsApp.',
            ],
            [
                'client_name' => 'Bambang Kusuma, S.H.',
                'client_phone' => '081199887766',
                'project_name' => 'Kusuma & Partners Law Office',
                'category' => 'Company Profile',
                'package_name' => 'Business Pro',
                'domain' => 'kusumalaw.co.id',
                'price' => 999000,
                'status' => 'pending',
                'deadline' => now()->addDays(14),
                'notes' => 'Menunggu kelengkapan dokumen profil partner dan foto kantor.',
            ],
        ];

        foreach ($projects as $project) {
            WebsiteProject::updateOrCreate(
                ['project_name' => $project['project_name']],
                $project
            );
        }
    }
}
