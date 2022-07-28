<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Borsodi IPA',
                "price"=>300,
                "description"=>"Borsodi IPA minőségi világos, felsőerjesztésű szűretlen sör 5% 0,5 l",
                "category"=>"IPA",
                "gallery"=>"/img/borsodi_ipa.jpg",
            ],
            [
                'name'=>'Carlsberg',
                "price"=>350,
                "description"=>"Carlsberg dán minőségi világos sör 5% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/carlsberg.jpg",
            ],
            [
                'name'=>'Kamenitza',
                "price"=>350,
                "description"=>"Kamenitza bolgár minőségi világos sör 4,4% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/Kamenitza.jpg",
            ],
            [
                'name'=>'Zywiec IPA',
                "price"=>350,
                "description"=>"Zywiec IPA lengyel minőségi világos, felsőerjesztésű szűretlen sör 5% 0,5 l",
                "category"=>"IPA",
                "gallery"=>"/img/Zywiec-IPA.png",
            ],
            [
                'name'=>'Warsteiner Premium',
                "price"=>400,
                "description"=>"Warsteiner Premium német minőségi világos sör 5% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/warsteiner.jpg",
            ],
            [
                'name'=>'Mythos',
                "price"=>350,
                "description"=>"Mythos görög minőségi világos sör 4,7% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/mythos1.jpg",
            ],
            [
                'name'=>'Fix Hellas',
                "price"=>350,
                "description"=>"Fix Hellas görög minőségi világos sör 5% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/fix.jpeg",
            ],
            [
                'name'=>'Birra Moretti',
                "price"=>400,
                "description"=>"Birra Moretti olasz világos sör 4,6% 0,33 l",
                "category"=>"lager",
                "gallery"=>"/img/moretti.jpg",
            ],
            [
                'name'=>'Staropramen Praha',
                "price"=>300,
                "description"=>"Staropramen Praha világos sör 4% 0,5 l",
                "category"=>"lager",
                "gallery"=>"/img/staropramen-Praha.jpg",
            ]
            ]);
    }
}
