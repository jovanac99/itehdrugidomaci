<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ustanova;

class DoktorFactory extends Factory
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
            'specijalizacija' => $this->faker->randomElement($array = array(
                'Interna medicina', 'Pedijatrija', 'Neurologija',
                'Opsta hirurgija', 'Oftamologija', 'Dermatovenerologija', 'Radiologija', 'Imunologija', 'Sportska medicina'
            )),
            'ustanova_id' => Ustanova::factory()
        ];
    }
}
