<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('department_id', 'department_master_users')->references('id')->on('department_master')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('designation_id', 'designation_master_users')->references('id')->on('designation_master')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('department_master_users');
            $table->dropForeign('designation_master_users');
        });
    }
}
