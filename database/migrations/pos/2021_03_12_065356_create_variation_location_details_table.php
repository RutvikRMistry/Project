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
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_variation_id')->index('product_variations_variation_location_details')->comment('id from product_variations table');
            $table->foreignId('product_variation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('variation_id')->index('variations_variation_location_details');
            $table->foreignId('variation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::connection('mysql_pos')->drop('variation_location_details');
    }
}
