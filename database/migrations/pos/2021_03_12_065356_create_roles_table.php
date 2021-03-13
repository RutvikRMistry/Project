<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('guard_name', 191);

            $table->unsignedBigInteger('business_id')->index('business_roles');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->tinyInteger('is_default')->default(0);
            $table->tinyInteger('is_service_staff')->default(0);
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
        Schema::connection('mysql_pos')->drop('roles');
    }
}
