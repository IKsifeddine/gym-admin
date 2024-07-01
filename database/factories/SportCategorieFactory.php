<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SportCategorie>
 */
class SportCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sports = ['boxing','musculation','taekwondo'];
        return [
            'nom'=>fake()->randomElement($sports),
            'prix'=> fake()->randomFloat(500,1000,2000),
            'description' =>fake()->sentence()
        ];
    }
}
