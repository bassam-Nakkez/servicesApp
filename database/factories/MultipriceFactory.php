<?php

namespace Database\Factories;

use App\Models\Multiprice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Multiprice>
 */
class MultipriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Multiprice::class;
    public function definition(): array
    {
        return [
                        'productID'=>1,
            "first"=>fake()->numberBetween(1,200),
            "second"=>fake()->numberBetween(1,200),
        ];
    }
}
