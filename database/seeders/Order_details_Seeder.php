<?php

namespace Database\Seeders;

use App\Models\Order_details;
use Database\Factories\Order_detailsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class order_details_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_details::factory()
            ->count(50)
            ->create();
    }
}
