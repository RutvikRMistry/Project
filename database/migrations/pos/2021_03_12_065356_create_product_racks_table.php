<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('product_racks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_product_racks');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('location_id');
            $table->integer('product_id');
            $table->string('rack', 191)->nullable();
            $table->string('row', 191)->nullable();
            $table->string('position', 191)->nullable();
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
        Schema::connection('mysql_pos')->drop('product_racks');
    }
}
