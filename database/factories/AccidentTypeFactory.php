<?php

namespace Database\Factories;

use App\Models\AccidentType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AccidentType>
 */
class AccidentTypeFactory extends Factory
{
    protected $model = AccidentType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
