<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('units', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_units');
            $table->string('actual_name', 191);
            $table->string('short_name', 191);
            $table->tinyInteger('allow_decimal');
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
        Schema::connection('mysql_pos')->drop('units', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
