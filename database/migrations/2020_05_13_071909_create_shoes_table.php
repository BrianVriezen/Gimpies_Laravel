<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->uuid('shoes_ID');
            $table->primary('shoes_ID');
            $table->string('shoe_name');
            $table->uuid('shoe_brand_FK')->nullable();
            $table->foreign('shoe_brand_FK')->references('shoe_brand_ID')->on('shoe_brand');
            $table->uuid('shoe_size_FK')->nullable();
            $table->foreign('shoe_size_FK')->references('shoe_size_ID')->on('shoe_size');
            $table->string('shoe_description');
            $table->string('shoe_amount');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
}
