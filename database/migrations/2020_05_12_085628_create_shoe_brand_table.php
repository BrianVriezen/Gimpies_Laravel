<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateShoeBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_brand', function (Blueprint $table) {
            $table->uuid('shoe_brand_ID');
            $table->primary('shoe_brand_ID');
            $table->string('shoe_brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoe_brand');
    }
}
