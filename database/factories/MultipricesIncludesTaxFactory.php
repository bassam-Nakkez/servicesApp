<?php

namespace Database\Factories;

use App\Models\MultipricesIncludesTax;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MultipricesIncludesTaxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=MultipricesIncludesTax::class;

    public function definition(): array
    {
        return [

                        'productID'=>1,
                        "first"=>fake()->numberBetween(1,200),
                        "second"=>fake()->numberBetween(1,200),
        ];
    }
}
