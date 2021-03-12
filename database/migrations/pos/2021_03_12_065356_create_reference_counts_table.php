<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenceCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('reference_counts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_type', 191);
            $table->integer('ref_count');
            $table->integer('business_id')->index('reference_counts');
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
        Schema::connection('mysql_pos')->drop('reference_counts', function (Blueprint $table) {
            
            
            
            
            
        });
    }
}
