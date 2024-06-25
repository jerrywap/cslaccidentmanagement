<?php

namespace Database\Factories;

use App\Models\Depot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Depot>
 */
class DepotFactory extends Factory
{
    protected $model = Depot::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'companyID' => \App\Models\Company::factory(),
        ];
    }
}
