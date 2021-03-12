<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToModelHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('model_has_permissions', function (Blueprint $table) {
            $table->foreign('permission_id', 'permissions_model_has_permissions')->references('id')->on('permissions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('model_has_permissions', function (Blueprint $table) {
            $table->dropForeign('permissions_model_has_permissions');
        });
    }
}
