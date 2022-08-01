<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class payment_type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            ['type_name'=>'transfer'],
            ['type_name'=>'cash'],
            ['type_name'=>'mobile_payment'],
            ['type_name'=>'credit card'],
        ]);
    }
}
