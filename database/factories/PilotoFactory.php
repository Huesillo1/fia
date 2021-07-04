<?php

namespace Database\Factories;

use App\Models\Piloto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PilotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Piloto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween(1,100),
            'escuderia_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
