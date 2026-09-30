<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\InvitationProject;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminInvitationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_invitation_projects_page(): void
    {
        $response = $this->get('/cms-admin/invitations');

        $response->assertRedirect('/cms-admin/login');
    }

    public function test_authenticated_admin_can_view_invitations_list(): void
    {
        $admin = User::factory()->create();
        InvitationProject::factory()->create([
            'title' => 'The Wedding of Ali & Fatimah',
            'groom_name' => 'Ali',
            'bride_name' => 'Fatimah',
            'slug' => 'ali-fatimah',
        ]);

        $response = $this->actingAs($admin)->get('/cms-admin/invitations');

        $response->assertStatus(200);
        $response->assertSee('Manajemen Undangan Digital');
        $response->assertSee('Ali & Fatimah');
    }

    public function test_admin_can_search_invitations(): void
    {
        $admin = User::factory()->create();
        InvitationProject::factory()->create(['groom_name' => 'Bambang', 'slug' => 'bambang-wedding']);
        InvitationProject::factory()->create(['groom_name' => 'Zulkifli', 'slug' => 'zulkifli-wedding']);

        $response = $this->actingAs($admin)->get('/cms-admin/invitations?search=Bambang');

        $response->assertStatus(200);
        $response->assertSee('Bambang');
        $response->assertDontSee('Zulkifli');
    }

    public function test_admin_can_create_new_invitation(): void
    {
        $admin = User::factory()->create();

        $payload = [
            'title' => 'The Wedding of Romeo & Juliet',
            'groom_name' => 'Romeo',
            'bride_name' => 'Juliet',
            'client_phone' => '081299887766',
            'event_type' => 'Pernikahan (Wedding)',
            'package_name' => 'Gold (Best Seller)',
            'slug' => 'romeo-juliet',
            'price' => 179000,
            'event_date' => now()->addDays(30)->format('Y-m-d'),
            'location_name' => 'Ballroom Verona Jakarta',
            'music_title' => 'Love Story - Taylor Swift',
            'status' => 'active',
            'notes' => 'Amplop QRIS BCA',
        ];

        $response = $this->actingAs($admin)->post('/cms-admin/invitations', $payload);

        $response->assertRedirect('/cms-admin/invitations');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('invitation_projects', [
            'title' => 'The Wedding of Romeo & Juliet',
            'slug' => 'romeo-juliet',
            'groom_name' => 'Romeo',
        ]);
    }

    public function test_admin_can_update_invitation(): void
    {
        $admin = User::factory()->create();
        $inv = InvitationProject::factory()->create([
            'status' => 'draft',
            'slug' => 'old-slug',
        ]);

        $updateData = [
            'title' => 'Updated Wedding Title',
            'groom_name' => $inv->groom_name,
            'bride_name' => $inv->bride_name,
            'client_phone' => $inv->client_phone,
            'event_type' => $inv->event_type,
            'package_name' => $inv->package_name,
            'slug' => 'updated-slug',
            'price' => 179000,
            'status' => 'active',
            'location_name' => 'Gedung Serbaguna Bandung',
        ];

        $response = $this->actingAs($admin)->put("/cms-admin/invitations/{$inv->id}", $updateData);

        $response->assertRedirect('/cms-admin/invitations');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('invitation_projects', [
            'id' => $inv->id,
            'title' => 'Updated Wedding Title',
            'slug' => 'updated-slug',
            'status' => 'active',
        ]);
    }

    public function test_admin_can_delete_invitation(): void
    {
        $admin = User::factory()->create();
        $inv = InvitationProject::factory()->create();

        $response = $this->actingAs($admin)->delete("/cms-admin/invitations/{$inv->id}");

        $response->assertRedirect('/cms-admin/invitations');
        $response->assertSessionHas('success');

        $this->assertDatabaseMissing('invitation_projects', [
            'id' => $inv->id,
        ]);
    }
}
