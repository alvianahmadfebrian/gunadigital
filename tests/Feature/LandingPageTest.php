<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test that the landing page loads successfully and contains core elements.
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Guna');
        $response->assertSee('Digital');
        $response->assertSee('Website');
        $response->assertSee('Undangan Digital');
        $response->assertSee('Pilihan Paket Harga Terbaik');
    }

    /**
     * Test that the about us page loads successfully and displays the structural team.
     */
    public function test_about_page_renders_successfully(): void
    {
        $response = $this->get('/tentang-kami');

        $response->assertStatus(200);
        $response->assertSee('Tentang Kami');
        $response->assertSee('GunaDigital');
        $response->assertSee('Visi & Misi GunaDigital', false);
        $response->assertSee('Alvian Ahmad Febrian');
        $response->assertSee('Founder & CEO GunaDigital.id', false);
        $response->assertSee('MEET OUR FOUNDER');
    }

    /**
     * Test that legal and contact pages render successfully.
     */
    public function test_other_public_pages_render_successfully(): void
    {
        $this->get('/syarat-ketentuan')->assertStatus(200);
        $this->get('/kebijakan-pengembalian-dana')->assertStatus(200);
        $this->get('/kebijakan-privasi')->assertStatus(200);
        $this->get('/kontak')->assertStatus(200);
    }

    /**
     * Test that the digital invitation demo page loads successfully.
     */
    public function test_invitation_demo_page_renders_successfully(): void
    {
        $response = $this->get(route('invitation.demo'));

        $response->assertStatus(200);
        $response->assertSee('Raditya');
        $response->assertSee('Anindya');
        $response->assertSee('Royal Botanical Wedding');
        $response->assertSee('Akad Nikah');
        $response->assertSee('Resepsi Pernikahan');
    }
}
