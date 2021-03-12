<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSalesOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_order_products', function (Blueprint $table) {
            $table->foreign('product_id', 'products_sales_order_products')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('order_id', 'sales_orders_sales_order_products')->references('id')->on('sales_orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_order_products', function (Blueprint $table) {
            $table->dropForeign('products_sales_order_products');
            $table->dropForeign('sales_orders_sales_order_products');
        });
    }
}
