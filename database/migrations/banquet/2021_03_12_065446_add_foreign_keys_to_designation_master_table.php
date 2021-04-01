<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDesignationMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('designation_master', function (Blueprint $table) {
            $table->foreign('department_id', 'department_master_esignation_master')->references('id')->on('department_master')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_designation_master')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('designation_master', function (Blueprint $table) {
            $table->dropForeign('department_master_esignation_master');
            $table->dropForeign('users_designation_master');
        });
    }
}
