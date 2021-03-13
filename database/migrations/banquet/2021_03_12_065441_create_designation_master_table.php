<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation_master', function (Blueprint $table) {
            $table->id();
            $table->string('designation_name');

            $table->unsignedBigInteger('department_id')->index('department_master_esignation_master');
            $table->foreignId('department_id')->constrained('department_master')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index('users_designation_master');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('designation_master');
    }
}
