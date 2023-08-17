<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\CategoryPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryPhoto>
 */
class CategoryPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=CategoryPhoto::class;
    public function definition(): array
    {
        return [
            'name' => fake()->imageUrl(),
            'level1name' => "photos",
            'relativename' => fake()->imageUrl(),
            'date' => fake()->numberBetween(), // password
            'size' => fake()->randomNumber(5),
            'type' => "file",
            'categoryID'=>Category::factory(),
            'path'=>fake()->imageUrl(),
            'fullname'=>fake()->imageUrl(),
        ];
    }
}
