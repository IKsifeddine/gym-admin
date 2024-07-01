<?php

namespace Database\Factories;

use App\Models\SportCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nom' => fake()->firstName(),
            'prenom' => fake()->lastName(),
            'adress' => fake()->address(),
            'telephone' => fake()->phoneNumber(),
            'cin' => fake()->randomAscii(),
            'email' => fake()->email(),
            'sport_categories_id' => SportCategorie::inRandomOrder()->first()->id,
            'status' => fake()->boolean(),
            'photo' => 'https://wac-cdn.atlassian.com/fr/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1868'


        ];
    }
}
