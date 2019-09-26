<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('promo');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('phone');
            $table->string('name_on_card');
            $table->bigInteger('card_number');
            $table->string('validity');
            $table->integer('cvc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
