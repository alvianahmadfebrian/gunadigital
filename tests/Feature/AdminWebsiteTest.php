<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use App\Models\WebsiteProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminWebsiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_website_projects_page(): void
    {
        $response = $this->get('/cms-admin/websites');

        $response->assertRedirect('/cms-admin/login');
    }

    public function test_authenticated_admin_can_view_website_projects_list(): void
    {
        $admin = User::factory()->create();
        WebsiteProject::factory()->create([
            'project_name' => 'Kopi Senja Cafe',
            'client_name' => 'Pak Joko',
        ]);

        $response = $this->actingAs($admin)->get('/cms-admin/websites');

        $response->assertStatus(200);
        $response->assertSee('Manajemen Proyek Website Bisnis');
        $response->assertSee('Kopi Senja Cafe');
        $response->assertSee('Pak Joko');
    }

    public function test_admin_can_search_website_projects(): void
    {
        $admin = User::factory()->create();
        WebsiteProject::factory()->create(['client_name' => 'Budi Mandiri']);
        WebsiteProject::factory()->create(['client_name' => 'Siti Aisyah']);

        $response = $this->actingAs($admin)->get('/cms-admin/websites?search=Budi');

        $response->assertStatus(200);
        $response->assertSee('Budi Mandiri');
        $response->assertDontSee('Siti Aisyah');
    }

    public function test_admin_can_create_new_website_project(): void
    {
        $admin = User::factory()->create();

        $payload = [
            'client_name' => 'Ahmad Dani',
            'client_phone' => '08123456789',
            'project_name' => 'Dani Fashion Studio',
            'category' => 'Toko Online',
            'package_name' => 'Toko Online Katalog',
            'domain' => 'danifashion.id',
            'price' => 1899000,
            'status' => 'in_progress',
            'deadline' => now()->addDays(10)->format('Y-m-d'),
            'notes' => 'Integrasi katalog WA',
        ];

        $response = $this->actingAs($admin)->post('/cms-admin/websites', $payload);

        $response->assertRedirect('/cms-admin/websites');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('website_projects', [
            'client_name' => 'Ahmad Dani',
            'project_name' => 'Dani Fashion Studio',
            'domain' => 'danifashion.id',
        ]);
    }

    public function test_admin_can_update_website_project(): void
    {
        $admin = User::factory()->create();
        $project = WebsiteProject::factory()->create([
            'status' => 'in_progress',
        ]);

        $updateData = [
            'client_name' => $project->client_name,
            'client_phone' => $project->client_phone,
            'project_name' => $project->project_name,
            'category' => $project->category,
            'package_name' => $project->package_name,
            'domain' => 'updateddomain.com',
            'price' => 999000,
            'status' => 'online',
        ];

        $response = $this->actingAs($admin)->put("/cms-admin/websites/{$project->id}", $updateData);

        $response->assertRedirect('/cms-admin/websites');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('website_projects', [
            'id' => $project->id,
            'domain' => 'updateddomain.com',
            'status' => 'online',
        ]);
    }

    public function test_admin_can_delete_website_project(): void
    {
        $admin = User::factory()->create();
        $project = WebsiteProject::factory()->create([
            'project_name' => 'Proyek Dihapus',
        ]);

        $response = $this->actingAs($admin)->delete("/cms-admin/websites/{$project->id}");

        $response->assertRedirect('/cms-admin/websites');
        $response->assertSessionHas('success');

        $this->assertDatabaseMissing('website_projects', [
            'id' => $project->id,
        ]);
    }
}
