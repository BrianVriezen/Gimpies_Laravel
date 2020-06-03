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
        DB::table( 'brands' )->truncate();
        DB::table( 'brands' )->insert( [
            [
                "brand_name"        => "Kenneth Cole"
            ],
            [
                "brand_name"        => "Nike"
            ],
            [
                "brand_name"        => "Adidas"
            ],
            [
                "brand_name"        => "Reebok"
            ],
            [
                "brand_name"        => "FILA"
            ],
            [
                "brand_name"        => "Timberland"
            ]
        ] );
    }
}
