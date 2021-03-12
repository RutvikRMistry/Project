<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCashRegisterTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('cash_register_transactions', function (Blueprint $table) {
            $table->foreign('cash_register_id', 'cash_registers_cash_register_transactions')->references('id')->on('cash_registers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('transaction_id', 'transactions_cash_registers')->references('id')->on('transactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('cash_register_transactions', function (Blueprint $table) {
            $table->dropForeign('cash_registers_cash_register_transactions');
            $table->dropForeign('transactions_cash_registers');
        });
    }
}
