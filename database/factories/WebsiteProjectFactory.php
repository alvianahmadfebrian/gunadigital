<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\WebsiteProject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WebsiteProject>
 */
class WebsiteProjectFactory extends Factory
{
    protected $model = WebsiteProject::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => fake()->name(),
            'client_phone' => fake()->phoneNumber(),
            'project_name' => fake()->company().' Website',
            'category' => fake()->randomElement(['Company Profile', 'Landing Page', 'Toko Online', 'Custom Web']),
            'package_name' => fake()->randomElement(['Landing Page Express', 'Business Pro', 'Toko Online Katalog']),
            'domain' => fake()->domainName(),
            'price' => fake()->randomElement([499000, 999000, 1899000, 2799000]),
            'status' => fake()->randomElement(['in_progress', 'review', 'online', 'pending']),
            'deadline' => fake()->dateTimeBetween('now', '+30 days'),
            'notes' => fake()->sentence(),
        ];
    }
}
