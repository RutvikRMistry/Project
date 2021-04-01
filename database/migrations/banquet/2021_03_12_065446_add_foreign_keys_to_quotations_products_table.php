<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQuotationsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations_products', function (Blueprint $table) {
            $table->foreign('product_id', 'products_quotations_products')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('quotation_id', 'quotations_quotations_products')->references('id')->on('quotations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotations_products', function (Blueprint $table) {
            $table->dropForeign('products_quotations_products');
            $table->dropForeign('quotations_quotations_products');
        });
    }
}
