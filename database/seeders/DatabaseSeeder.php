<?php

namespace Database\Seeders;

use App\Models\Abonement;
use App\Models\Client;
use App\Models\SportCategorie;
use App\Models\User;
use Database\Factories\SportCategorieFactory;
use GuzzleHttp\Promise\Create;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        SportCategorie::factory(10)->create();
        Client::factory(10)->create();
        Abonement::factory(10)->create();

    }
}
