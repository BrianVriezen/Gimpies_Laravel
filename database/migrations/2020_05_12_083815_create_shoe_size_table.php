<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateShoeSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_size', function (Blueprint $table) {
            $table->uuid('shoe_size_ID');
            $table->primary('shoe_size_ID');
            $table->string('shoe_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoe_size');
    }
}
