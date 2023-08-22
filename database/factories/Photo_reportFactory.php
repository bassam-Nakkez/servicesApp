<?php

namespace Database\Factories;

use App\Models\ReportPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Photo_reportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =ReportPhoto::class;

    public function definition(): array
    {


        return [

            'reprtID'=>fake()->numberBetween(1,15),
            'photo'=>"{{ asset('assets/img/placeholder.jpg') }}",
        ];
    }
}
