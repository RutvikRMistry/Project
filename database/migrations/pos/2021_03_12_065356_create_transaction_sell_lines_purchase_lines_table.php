<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSellLinesPurchaseLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('transaction_sell_lines_purchase_lines', function (Blueprint $table) {
            $table->id();
            $table->integer('sell_line_id')->nullable()->comment('id from transaction_sell_lines');

            $table->unsignedBigInteger('stock_adjustment_line_id')->nullable()->index('stock_adjustment_lines_transaction_sell_lines_purchase_lines')->comment('id from stock_adjustment_lines');
            // $table->foreign('stock_adjustment_line_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('purchase_line_id')->index('purchase_lines_transaction_sell_lines_purchase_lines')->comment('id from purchase_lines');
            // $table->foreign('purchase_line_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->decimal('quantity', 20, 4);
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
        Schema::connection('mysql_pos')->drop('transaction_sell_lines_purchase_lines');
    }
}
