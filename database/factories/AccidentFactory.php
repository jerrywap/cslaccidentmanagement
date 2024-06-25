<?php

namespace Database\Factories;

use App\Models\Accident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Accident>
 */
class AccidentFactory extends Factory
{
    protected $model = Accident::class;

    public function definition()
    {
        return [
            'accidentRef' => $this->faker->unique()->numerify('AR-###'),
            'accidentTypeID' => \App\Models\AccidentType::factory(),
            'accidentDate' => $this->faker->date(),
            'companyID' => \App\Models\Company::factory(),
            'depotID' => \App\Models\Depot::factory(),
            'personTypeID' => 1, // Assuming personTypeID 1 for simplicity
            'forename' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'hasAnalysisCompleted' => $this->faker->boolean(),
            'investigationDetails' => $this->faker->text(),
            'accidentSignOffID' => null,
            'SHAManagerSignOffID' => null,
            'regionalMDSignOffID' => null,
            'esgHeadSignOffID' => null,
            'isDeleted' => false,
        ];
    }
}
