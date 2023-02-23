<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teams>
 */
class teamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'coach' => $this->faker->name(),
            'category'=>$this->faker->randomElement(['primera_division', 'segunda_division', 'primera_federacion', 'segunda_federacion','tercera_federacion']),
            'budget'=>$this->faker->randomFloat(2,10000,9999999)
        ];
    }
}
