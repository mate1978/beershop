<?php

namespace Database\Factories;

use App\Models\Order_details;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_details>
 */
class Order_detailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function price($id){
            $query =DB::table('products')
                ->where('id','=', $id)
                ->first()
                ->value('price');
            return $query;
    }


    public function definition()
    {



        return [

            $quantity='quantity'=>$this->faker->numberBetween(1,50),
            $order_id='orders_id'=>$this->faker->numberBetween(1,Orders::class::count()),
            $product_id ='product_id'=>$this->faker->numberBetween(1,Product::class::count()),
            'UnitPrice'=>function(array $attributes){
                return Product::find($attributes['product_id'])->price;
            }






        ];





    }



}
