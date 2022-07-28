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
        $types = ['transfer', 'cash', 'mobile_payment','credit card'];
        DB::table('payment_type')->insert(
            ['type_name'=>$types[random_int(0,3)],]
        );
    }
}
