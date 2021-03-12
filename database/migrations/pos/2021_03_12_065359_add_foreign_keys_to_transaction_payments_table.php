<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('transaction_payments', function (Blueprint $table) {
            $table->foreign('transaction_id', 'transactions_transaction_payments')->references('id')->on('transactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('transaction_payments', function (Blueprint $table) {
            $table->dropForeign('transactions_transaction_payments');
        });
    }
}
