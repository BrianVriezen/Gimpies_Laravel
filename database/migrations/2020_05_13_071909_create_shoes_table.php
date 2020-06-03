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
            $table->id();
            $table->string('shoe_name');

            $table->foreignId('shoe_brand_FK');
            $table->foreign('shoe_brand_FK')->references('id')->on('brands');

            $table->foreignId('shoe_size_FK');
            $table->foreign('shoe_size_FK')->references('id')->on('sizes');

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
