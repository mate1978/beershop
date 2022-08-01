<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order_type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_types')->insert([
            [
            'type_name'=>'Pick Pack Pont'
        ],[
            'type_name'=>'Home delivery'
            ],[
                'type_name'=>'on_shop'
            ]
            ]);

    }
}
