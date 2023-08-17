<?php

namespace Database\Factories;

use App\Models\Faq;
use App\Models\Sub_Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Sub_FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Sub_Faq::class;
    public function definition(): array
    {
        return [
            'label'=>fake()->title(),
            'color'=>"005fbf",
            'description'=>fake()->paragraph() ,
            'faqID'=>Faq::factory(),
        ];
    }
}
