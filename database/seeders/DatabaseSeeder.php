<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\VoiceSpecialSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            LanguageSeeder::class,
            VoiceSpecialSeeder::class
        ]);
    }
}
