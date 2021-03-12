<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('gateways', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('main_name', 191)->unique('main_name');
            $table->string('name', 191)->nullable();
            $table->double('minamo', 8, 2)->default(0.00);
            $table->double('maxamo', 8, 2)->default(0.00);
            $table->double('fixed_charge', 8, 2)->default(0.00);
            $table->double('percent_charge', 8, 2)->default(0.00);
            $table->double('rate', 8, 2)->default(0.00);
            $table->string('val1', 191)->nullable();
            $table->string('val2', 191)->nullable();
            $table->string('val3', 191)->nullable();
            $table->string('val4', 191)->nullable();
            $table->string('val5', 191)->nullable();
            $table->string('val6', 191)->nullable();
            $table->string('val7', 191)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_online')->default(0);
            $table->tinyInteger('is_offline')->default(0);
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
        Schema::connection('mysql_front')->drop('gateways', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
