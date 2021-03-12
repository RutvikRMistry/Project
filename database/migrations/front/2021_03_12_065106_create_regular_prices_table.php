<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegularPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('regular_prices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('room_type_id')->index('room_types_regular_prices');
            $table->enum('day_1', ['ADD', 'LESS']);
            $table->double('day_1_amount', 8, 2)->default(0.00);
            $table->enum('day_2', ['ADD', 'LESS']);
            $table->double('day_2_amount', 8, 2)->default(0.00);
            $table->enum('day_3', ['ADD', 'LESS']);
            $table->double('day_3_amount', 8, 2)->default(0.00);
            $table->enum('day_4', ['ADD', 'LESS']);
            $table->double('day_4_amount', 8, 2)->default(0.00);
            $table->enum('day_5', ['ADD', 'LESS']);
            $table->double('day_5_amount', 8, 2)->default(0.00);
            $table->enum('day_6', ['ADD', 'LESS']);
            $table->double('day_6_amount', 8, 2)->default(0.00);
            $table->enum('day_7', ['ADD', 'LESS']);
            $table->double('day_7_amount', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('regular_prices', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
