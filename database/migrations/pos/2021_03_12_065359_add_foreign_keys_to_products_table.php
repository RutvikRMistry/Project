<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('products', function (Blueprint $table) {
            $table->foreign('brand_id', 'brandsproducts')->references('id')->on('brands')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('business_id', 'business_products')->references('id')->on('business')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('category_id', 'categories_products')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('unit_id', 'units_products')->references('id')->on('units')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('products', function (Blueprint $table) {
            $table->dropForeign('brandsproducts');
            $table->dropForeign('business_products');
            $table->dropForeign('categories_products');
            $table->dropForeign('units_products');
        });
    }
}
