<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockAdjustmentLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('stock_adjustment_lines', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('transaction_id')->index('transactions_stock_adjustment_lines');
            $table->integer('product_id');
            $table->integer('variation_id')->index('variations_stock_adjustment_lines');
            $table->decimal('quantity', 20, 4);
            $table->decimal('unit_price', 20)->nullable()->comment('Last purchase unit price');
            $table->integer('removed_purchase_line')->nullable();
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
        Schema::connection('mysql_pos')->drop('stock_adjustment_lines', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
