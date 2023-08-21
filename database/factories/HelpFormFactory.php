<?php

namespace Database\Factories;

use App\Models\HelpForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HelpForm>
 */
class HelpFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = HelpForm::class;
    public function definition(): array
    {
        return [

        'fkSoc'=> fake()->unique()->numberBetween(1,100),
        'subject'=>fake(),
        'message',
        'typeCode',
        'severityCode',
        ];
    }
}
