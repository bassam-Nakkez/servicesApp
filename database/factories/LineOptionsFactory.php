<?php

namespace Database\Factories;

use App\Models\Line;
use App\Models\LineOptions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LineOptions>
 */
class LineOptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=LineOptions::class;
    public function definition(): array
    {
        return [
            'lineID'=>1,
            'options_idtasks'=>"50",
        ];
    }
}
