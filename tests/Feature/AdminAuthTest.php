<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/cms-admin/login');

        $response->assertStatus(200);
        $response->assertSee('CMS Admin Panel');
        $response->assertSee('Username');
    }

    public function test_unauthenticated_user_cannot_access_admin_dashboard(): void
    {
        $response = $this->get('/cms-admin/dashboard');

        $response->assertRedirect('/cms-admin/login');
    }

    public function test_admin_can_authenticate_using_valid_credentials(): void
    {
        $user = User::factory()->create([
            'username' => 'masteryoda',
            'password' => bcrypt('pisangkeju'),
        ]);

        $response = $this->post('/cms-admin/login', [
            'username' => 'masteryoda',
            'password' => 'pisangkeju',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertRedirect(route('admin.dashboard'));
    }

    public function test_admin_cannot_authenticate_with_invalid_password(): void
    {
        User::factory()->create([
            'username' => 'masteryoda',
            'password' => bcrypt('pisangkeju'),
        ]);

        $response = $this->post('/cms-admin/login', [
            'username' => 'masteryoda',
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
        $response->assertSessionHasErrors('username');
    }

    public function test_authenticated_admin_can_logout(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@gunadigital.id',
        ]);

        $response = $this->actingAs($user)->post('/cms-admin/logout');

        $this->assertGuest();
        $response->assertRedirect(route('admin.login'));
    }

    public function test_authenticated_admin_visiting_login_redirected_to_dashboard(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/cms-admin/login');

        $response->assertRedirect('/cms-admin/dashboard');
    }
}
