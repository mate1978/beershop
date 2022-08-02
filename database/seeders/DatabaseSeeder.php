<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class,ProductSeeder::class,order_type_Seeder::class,payment_type_Seeder::class,StockSeeder::class,orderSeeder::class,Order_details_Seeder::class]);
    }
}
