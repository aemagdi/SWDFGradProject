<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->unsignedBigInteger("food_id");
            $table->foreign('food_id')->references('id')->on('food')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer("quantity")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
