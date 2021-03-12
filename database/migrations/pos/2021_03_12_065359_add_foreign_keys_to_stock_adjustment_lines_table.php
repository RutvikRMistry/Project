<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStockAdjustmentLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('stock_adjustment_lines', function (Blueprint $table) {
            $table->foreign('transaction_id', 'transactions_stock_adjustment_lines')->references('id')->on('transactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('variation_id', 'variations_stock_adjustment_lines')->references('id')->on('variations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('stock_adjustment_lines', function (Blueprint $table) {
            $table->dropForeign('transactions_stock_adjustment_lines');
            $table->dropForeign('variations_stock_adjustment_lines');
        });
    }
}
