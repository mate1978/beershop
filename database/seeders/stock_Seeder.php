<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class stock_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        stock::factory()
            ->count(Count(Product::all()))
            ->create();

    }
}
