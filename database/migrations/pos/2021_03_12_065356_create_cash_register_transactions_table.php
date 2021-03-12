<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashRegisterTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('cash_register_transactions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cash_register_id')->index('cash_registers_cash_register_transactions');
            $table->decimal('amount', 20)->default(0.00);
            $table->enum('pay_method', ['cash', 'card', 'cheque', 'bank_transfer', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3', 'other'])->nullable();
            $table->enum('type', ['debit', 'credit']);
            $table->enum('transaction_type', ['initial', 'sell', 'transfer', 'refund']);
            $table->integer('transaction_id')->nullable()->index('transactions_cash_registers');
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
        Schema::connection('mysql_pos')->drop('cash_register_transactions', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
