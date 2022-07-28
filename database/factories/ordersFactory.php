<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'billing_addres'=>$this->faker->address,
            'shipping_addres'=>$this->faker->address,
            //'price' ez szamitott majd kesobb
            'shipping_cost'=>1500,


        ];
    }
}
