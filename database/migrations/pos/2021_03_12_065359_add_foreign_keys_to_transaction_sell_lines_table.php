<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionSellLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('transaction_sell_lines', function (Blueprint $table) {
            $table->foreign('transaction_id', 'transactions_transaction_sell_lines')->references('id')->on('transactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('variation_id', 'variations_transaction_sell_lines')->references('id')->on('variations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('transaction_sell_lines', function (Blueprint $table) {
            $table->dropForeign('transactions_transaction_sell_lines');
            $table->dropForeign('variations_transaction_sell_lines');
        });
    }
}
