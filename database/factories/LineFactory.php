<?php

namespace Database\Factories;

use App\Models\Line;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Line::class;
    public function definition(): array
    {
        return [
            'orderID'=>1,
            'qty'=>fake()->title(),
            'dateStart'=>fake()->title(),
            'dateEnd'=>fake()->title(),
            'price'=>fake()->title(),
            'subPrice'=>fake()->title(),
            'multicurrency_subprice'=>fake()->title(),
            'multicurrency_total_ttc'=>fake()->title(),
            'multicurrency_total_ht'=>fake()->title(),
            'multicurrency_total_tva'=>fake()->title(),
            'multicurrency_tx'=>fake()->title(),
            'multicurrency_code'=>fake()->title(),
            'tva_tx'=>fake()->title(),
            'total_ht'=>fake()->title(),
            'total_tva'=>fake()->title(),
            'total_ttc'=>fake()->title(),
            'total_localtax1'=>fake()->title(),
            'total_localtax2'=>fake()->title(),
            'fk_product'=>1
        ];
    }
}
