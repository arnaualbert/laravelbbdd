<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\players>
 */
class playersFactory extends Factory
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
            'surname' => $this->faker->lastName(),
            'yearofbirth'=>$this->faker->numberBetween(1980,2005),
            'salary'=>$this->faker->randomFloat(2,10000,9999999),
            // 'team_id'=>$this->faker->numberBetween(0,10)
        ];
    }
}
