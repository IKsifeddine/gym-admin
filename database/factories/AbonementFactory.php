<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\SportCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonement>
 */
class AbonementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateDebut = $this->faker->dateTimeBetween('-1 year', 'now');
        $dateFin = (clone $dateDebut)->modify('+' . rand(1, 30) . ' days');

        return [
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'sport_categories_id' => SportCategorie::inRandomOrder()->first()->id,
            'client_id' => Client::inRandomOrder()->first()->id,
            'tarif_abonement' => fake()->randomFloat(500, 1000, 2000),

        ];
    }
}
