<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class ordersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {




        return [
            'user_id'=>$this->faker->numberBetween(1,Count(User::all())),
            'payment_type_id'=>$this->faker->numberBetween(1,4),
            'order_type_id'=>$this->faker->numberBetween(1,3),
            'billing_address'=>$this->faker->address,
            'shipping_address'=>$this->faker->address,
            'price' =>0,
            'shipping_cost'=>1500,




        ];
    }
}
