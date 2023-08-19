<?php

namespace Database\Factories;

use App\Models\ArrayOptions;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */



class ArrayOptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=ArrayOptions::class;
    public function definition(): array
    {
        return [
           'optionsLatitude'=>(String)fake()->numberBetween(),
           'optionsLongitude'=>(String)fake()->numberBetween(),
           'optionsSurfacem'=>(String)fake()->numberBetween(),
           'contactID'=>Contact::factory(),
        ];
    }
}
