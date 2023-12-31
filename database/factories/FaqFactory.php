<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Faq::class;
    public function definition(): array
    {
        return [
            'label'=>fake()->title(),
            'color'=>"005fbf",
            'description'=>fake()->paragraph() ,
        ];
    }
}
