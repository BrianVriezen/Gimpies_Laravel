<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateSoldShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sold_shoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shoes_ID_FK');
            $table->foreign('shoes_ID_FK')->references('id')->on('shoes');

            $table->foreignId('user_ID_FK');
            $table->foreign('user_ID_FK')->references('id')->on('users');

            $table->string('shoe_amount');
            $table->dateTime('shoe_sold_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_shoes');
    }
}
