<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('model_has_roles', function (Blueprint $table) {
            $table->integer('role_id')->index('roles_model_has_roles');
            $table->integer('model_id');
            $table->string('model_type', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('model_has_roles', function (Blueprint $table) {
            
            
            
        });
    }
}
