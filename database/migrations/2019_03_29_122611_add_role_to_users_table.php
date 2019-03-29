<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoppins_users', function (Blueprint $table) {
            $table->enum('role', ['SA', 'A', 'C', 'V', 'U', 'UA'])->after('address_id')->default('UA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoppins_users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
