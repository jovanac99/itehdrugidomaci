<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UstanovaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_ustanove' => $this->faker->company(),
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city(),
            'broj_zaposlenih' => $this->faker->numberBetween($min = 10, $max = 2000),
            'website' => $this->faker->url()
        ];
    }
}
