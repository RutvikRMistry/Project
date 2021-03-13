<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('role_has_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id')->index('permissions_role_has_permissions');
            $table->foreignId('permission_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('role_id')->index('roles_role_has_permissions');
            $table->foreignId('role_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('role_has_permissions');
    }
}
