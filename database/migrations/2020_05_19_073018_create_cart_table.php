<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->uuid('cart_ID');
            $table->primary('cart_ID');
            $table->uuid('shoes_ID_FK')->nullable();
            $table->foreign('shoes_ID_FK')->references('shoes_ID')->on('shoes');
            $table->uuid('user_ID_FK')->nullable();
            $table->foreign('user_ID_FK')->references('user_id')->on('users');
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
