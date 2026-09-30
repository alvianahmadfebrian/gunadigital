<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'title',
    'groom_name',
    'bride_name',
    'client_phone',
    'event_type',
    'package_name',
    'slug',
    'custom_domain',
    'event_date',
    'location_name',
    'price',
    'rsvp_count',
    'music_title',
    'status',
    'notes',
])]
class InvitationProject extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'price' => 'integer',
            'rsvp_count' => 'integer',
            'event_date' => 'date',
        ];
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'Rp '.number_format($this->price, 0, ',', '.');
    }

    public function getDisplayCoupleAttribute(): string
    {
        if ($this->bride_name) {
            return "{$this->groom_name} & {$this->bride_name}";
        }

        return $this->groom_name;
    }
}
