<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class ShoeSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table( 'shoe_size' )->truncate();
        DB::table( 'shoe_size' )->insert( [
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "36"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "37"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "38"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "39"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "40"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "41"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "42"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "43"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "44"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "45"
            ],
            [
                "shoe_size_ID"          => Uuid::generate(),
                "shoe_size"        => "46"
            ]
        ] );
    }
}

