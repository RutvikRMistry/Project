<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('res_tables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_res_tables');
            // $table->foreign('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('location_id');
            $table->string('name', 191);
            $table->text('description');
            $table->integer('created_by');
            $table->softDeletes();
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
        Schema::connection('mysql_pos')->drop('res_tables');
    }
}
