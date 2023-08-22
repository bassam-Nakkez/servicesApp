<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReprotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Report::class;

    public function definition(): array
    {
            return [
                'empID'=>fake()->unique()->numberBetween(1,20),
                'subject'=>fake()->title(),
                'message'=>fake()->text() ,
                'lineID'=>fake()->unique()->numberBetween(1,25),
            ];
    }
}
