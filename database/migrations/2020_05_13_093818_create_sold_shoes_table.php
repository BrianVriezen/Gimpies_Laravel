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
            $table->uuid('sold_shoes_ID');
            $table->primary('sold_shoes_ID');
            $table->uuid('shoes_ID_FK')->nullable();
            $table->foreign('shoes_ID_FK')->references('shoes_ID')->on('shoes');
            $table->uuid('user_ID_FK')->nullable();
            $table->foreign('user_ID_FK')->references('user_id')->on('users');
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
