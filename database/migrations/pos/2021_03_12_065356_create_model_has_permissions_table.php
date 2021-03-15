<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('model_has_permissions', function (Blueprint $table) {

            $table->unsignedBigInteger('permission_id')->index('permissions_model_has_permissions');
            // $table->foreign('permission_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::connection('mysql_pos')->drop('model_has_permissions');
    }
}
