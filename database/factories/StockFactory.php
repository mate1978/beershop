<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function autoIncrement()
    {
        for ($i = 0; $i < 1000; $i++) {
            yield $i;
        }
    }
    public function definition()
    {
        static $number = 1;

        $now = date_create()->format('Y-m-d H:i:s');
        return [

            'product_id'=>$number++,
            'in_stock'=>$this->faker->numberBetween(0,100),
            'created_at'=>$now,
            'updated_at'=>$now,
        ];

    }

}
