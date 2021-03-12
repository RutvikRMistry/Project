<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('role_has_permissions', function (Blueprint $table) {
            $table->foreign('permission_id', 'permissions_role_has_permissions')->references('id')->on('permissions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('role_id', 'roles_role_has_permissions')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('role_has_permissions', function (Blueprint $table) {
            $table->dropForeign('permissions_role_has_permissions');
            $table->dropForeign('roles_role_has_permissions');
        });
    }
}
