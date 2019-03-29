<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoppins_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('street_number');
            $table->string('street_number_comp')->nullable();
            $table->string('street_name_one');
            $table->string('street_name_two')->nullable();
            $table->integer('postal_code');
            $table->string('city_name');
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
        Schema::dropIfExists('hoppins_addresses');
    }
}
