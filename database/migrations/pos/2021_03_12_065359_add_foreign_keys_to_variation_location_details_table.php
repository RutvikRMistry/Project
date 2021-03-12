<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVariationLocationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('variation_location_details', function (Blueprint $table) {
            $table->foreign('product_variation_id', 'product_variations_variation_location_details')->references('id')->on('product_variations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('variation_id', 'variations_variation_location_details')->references('id')->on('variations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('variation_location_details', function (Blueprint $table) {
            $table->dropForeign('product_variations_variation_location_details');
            $table->dropForeign('variations_variation_location_details');
        });
    }
}
