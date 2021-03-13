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
            $table->id();

            $table->unsignedBigInteger('transaction_id')->index('transactions_stock_adjustment_lines');
            $table->foreignId('transaction_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('variation_id')->index('variations_stock_adjustment_lines');
            $table->foreignId('variation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::connection('mysql_pos')->drop('stock_adjustment_lines');
    }
}
