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
        DB::table( 'sizes' )->truncate();
        DB::table( 'sizes' )->insert( [
            [
                "size"        => "36"
            ],
            [
                "size"        => "37"
            ],
            [
                "size"        => "38"
            ],
            [
                "size"        => "39"
            ],
            [
                "size"        => "40"
            ],
            [
                "size"        => "41"
            ],
            [
                "size"        => "42"
            ],
            [
                "size"        => "43"
            ],
            [
                "ssize"        => "44"
            ],
            [
                "size"        => "45"
            ],
            [
                "size"        => "46"
            ]
        ] );
    }
}

