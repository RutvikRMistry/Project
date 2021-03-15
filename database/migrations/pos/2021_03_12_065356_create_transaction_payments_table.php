<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('transaction_payments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transaction_id')->nullable()->index('transactions_transaction_payments');
            // $table->foreign('transaction_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->tinyInteger('is_return')->default(0)->comment('Used during sales to return the change');
            $table->decimal('amount', 20)->default(0.00);
            $table->enum('method', ['cash', 'card', 'cheque', 'bank_transfer', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3', 'other'])->nullable();
            $table->string('transaction_no', 191)->nullable();
            $table->string('card_transaction_number', 191)->nullable();
            $table->string('card_number', 191)->nullable();
            $table->enum('card_type', ['visa', 'master'])->nullable();
            $table->string('card_holder_name', 191)->nullable();
            $table->string('card_month', 191)->nullable();
            $table->string('card_year', 191)->nullable();
            $table->string('card_security', 5)->nullable();
            $table->string('cheque_number', 191)->nullable();
            $table->string('bank_account_number', 191)->nullable();
            $table->dateTime('paid_on')->nullable();
            $table->integer('created_by');
            $table->integer('payment_for')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('note', 191)->nullable();
            $table->string('payment_ref_no', 191)->nullable();
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
        Schema::connection('mysql_pos')->drop('transaction_payments');
    }
}
