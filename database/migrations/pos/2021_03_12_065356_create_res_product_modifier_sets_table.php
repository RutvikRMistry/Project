<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResProductModifierSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('res_product_modifier_sets', function (Blueprint $table) {
            $table->integer('modifier_set_id');

            $table->unsignedBigInteger('product_id')->comment('Table use to store the modifier sets applicable for a product');
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('res_product_modifier_sets', function (Blueprint $table) {
            
            
        });
    }
}
