<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\InvitationProject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<InvitationProject>
 */
class InvitationProjectFactory extends Factory
{
    protected $model = InvitationProject::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $groom = fake()->firstNameMale();
        $bride = fake()->firstNameFemale();
        $slug = Str::slug("{$groom}-{$bride}-".fake()->unique()->randomNumber(3));

        return [
            'title' => "The Wedding of {$groom} & {$bride}",
            'groom_name' => $groom,
            'bride_name' => $bride,
            'client_phone' => fake()->phoneNumber(),
            'event_type' => fake()->randomElement(['Pernikahan (Wedding)', 'Walimatul Khitan', 'Ulang Tahun / Milad', 'Event Korporat']),
            'package_name' => fake()->randomElement(['Silver / Lite', 'Gold (Best Seller)', 'Platinum Custom']),
            'slug' => $slug,
            'custom_domain' => fake()->optional()->domainName(),
            'event_date' => fake()->dateTimeBetween('+7 days', '+90 days'),
            'location_name' => fake()->city().' Convention Hall',
            'price' => fake()->randomElement([99000, 179000, 299000]),
            'rsvp_count' => fake()->numberBetween(20, 300),
            'music_title' => 'Romantic Wedding Song',
            'status' => fake()->randomElement(['active', 'draft', 'completed', 'expired']),
            'notes' => fake()->sentence(),
        ];
    }
}
