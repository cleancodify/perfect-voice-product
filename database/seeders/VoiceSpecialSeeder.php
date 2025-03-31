<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VoiceSpecial;

class VoiceSpecialSeeder extends Seeder
{
    public function run(): void
    {
        $specials = [
            'Commercial', 'Deep', 'Young', 'Natural', 'Distinctive', 'Senior',
            'Playful', 'Urban', 'Cool', 'Accessible', 'Versatile', 'Reliable',
            'Mature', 'Friendly', 'Warm', 'Soft', 'Corporate'
        ];

        foreach ($specials as $name) {
            VoiceSpecial::create([
                'code' => strtolower(str_replace(' ', '_', $name)),
                'name' => $name
            ]);
        }
    }
}

