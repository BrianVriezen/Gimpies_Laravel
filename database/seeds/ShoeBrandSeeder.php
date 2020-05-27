<?php

use Illuminate\Database\Seeder;

class ShoeBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table( 'shoe_brand' )->truncate();
        DB::table( 'shoe_brand' )->insert( [
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "Kenneth Cole"
            ],
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "Nike"
            ],
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "Adidas"
            ],
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "Reebok"
            ],
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "FILA"
            ],
            [
                "shoe_brand_ID"          => Uuid::generate(),
                "shoe_brand"        => "Timberland"
            ]
        ] );
    }
}
