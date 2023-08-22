<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Order::class;
    public function definition(): array
    {
        return [
            'socid'=>fake()->numberBetween(0,100),
            'type'=>fake()->numberBetween(0,100),
            'contactID'=>1,
            'date'=>fake()->title(),
            'note_public'=>fake()->title(),
            'subscriptionType'=>fake()->numberBetween(0,100),
            'date_Commande'=>fake()->title(),
            'status'=>0,
            'isRecurrent'=>false,
            'multicurrency_subprice'=>fake()->title(),
            'multicurrency_tx'=>fake()->title(),
            'multicurrency_code'=>fake()->title(),
            'multicurrency_total_ttc'=>fake()->title(),
            'multicurrency_total_tva'=>fake()->title(),
            'tva_tx'=>fake()->title(),
            'total_ht'=>fake()->title(),
            'total_tva'=>fake()->title(),
            'total_localtax1'=>fake()->title(),
            'total_localtax2'=>fake()->title(),
            'total_ttc'=>fake()->title(),
            'multicurrency_total_ht'=>fake()->title(),
            'subprice'=>fake()->title(),
            'userID'=>fake()->numberBetween(1,300),
            'created_at'=>fake()->date(),

        ];
    }
}
