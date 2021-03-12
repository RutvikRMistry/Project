<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionSellLinesPurchaseLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('transaction_sell_lines_purchase_lines', function (Blueprint $table) {
            $table->foreign('purchase_line_id', 'purchase_lines_transaction_sell_lines_purchase_lines')->references('id')->on('purchase_lines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('stock_adjustment_line_id', 'stock_adjustment_lines_transaction_sell_lines_purchase_lines')->references('id')->on('stock_adjustment_lines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('transaction_sell_lines_purchase_lines', function (Blueprint $table) {
            $table->dropForeign('purchase_lines_transaction_sell_lines_purchase_lines');
            $table->dropForeign('stock_adjustment_lines_transaction_sell_lines_purchase_lines');
        });
    }
}
