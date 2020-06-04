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
            $table->foreignId('shoe_id');
            $table->foreign('shoe_id')->references('id')->on('shoes');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('amount');
            $table->dateTime('sold_at');
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
