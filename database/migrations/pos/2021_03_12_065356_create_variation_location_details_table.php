<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationLocationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('variation_location_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->integer('product_variation_id')->index('product_variations_variation_location_details')->comment('id from product_variations table');
            $table->integer('variation_id')->index('variations_variation_location_details');
            $table->integer('location_id');
            $table->decimal('qty_available', 20, 4);
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
        Schema::connection('mysql_pos')->drop('variation_location_details', function (Blueprint $table) {
            
            
            
            
            
            
            
        });
    }
}
