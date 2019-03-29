<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoppins_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->date('birthdate');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone_number')->nullable();
            $table->string('prefered_city')->nullable();
            $table->integer('warning_count')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
