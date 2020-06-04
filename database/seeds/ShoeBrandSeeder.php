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
                "name"        => "Kenneth Cole"
            ],
            [
                "name"        => "Nike"
            ],
            [
                "name"        => "Adidas"
            ],
            [
                "name"        => "Reebok"
            ],
            [
                "name"        => "FILA"
            ],
            [
                "name"        => "Timberland"
            ]
        ] );
    }
}
