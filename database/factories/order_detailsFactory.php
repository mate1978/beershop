<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class order_detailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            $quantity='quantity'=>$this->faker->numberBetween(1,50),
            'orders_id'=>$this->faker->numberBetween(1,Orders::class::count()),
            $product_id ='product_id'=>$this->faker->numberBetween(1,Product::class::count()),
            $unitPrice= DB::table('products')->where('id',"=",$product_id)->get(),
            'per/price'=>$unitPrice,
            'price'=>int($unitPrice)*int($quantity),
        ];
    }
}
