<?php

namespace Database\Factories;

use App\Models\Multiprice;
use App\Models\MultipricesIncludesTax;
use App\Models\MultipricesTaxRate;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Product::class;
    public function definition(): array
    {
        return [
            'lable'=>fake()->title(),
            'price'=>fake()->numberBetween(0,200),
            'priceMin'=>fake()->numberBetween(0,200),
            'priceIncludesTax'=>fake()->numberBetween(0,200),
            'condtion'=>fake()->title(),
            'description'=>fake()->paragraph(),
            'categoryID'=>1,
    
        ];
    }
}
