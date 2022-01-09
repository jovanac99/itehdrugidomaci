<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doktor;

class PacijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->unique()->numerify('#########'),
            'soba' => $this->faker->numberBetween($min = 1, $min = 1000),
            'doktor_id' => Doktor::factory()
        ];
    }
}
