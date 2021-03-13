<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('package_permissions', function (Blueprint $table) {
            $table->integer('id');

            $table->unsignedBigInteger('package_id');
            $table->foreignId('package_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index('users_package_permissions');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('business_id')->index('business_package_permissions');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->date('start_date');
            $table->date('end_date');
            $table->string('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('package_permissions');
    }
}
