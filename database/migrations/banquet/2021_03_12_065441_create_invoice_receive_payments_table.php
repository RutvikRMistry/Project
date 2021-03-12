<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceReceivePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_receive_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('invoice_id')->index('invoices_invoice_receive_payments');
            $table->date('payment_date');
            $table->string('payment_method', 191);
            $table->double('payment_received', 8, 2);
            $table->string('payment_number', 191);
            $table->string('paykey', 191)->nullable();
            $table->integer('user_id')->index('users_invoice_receive_payments');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('customer_id')->index('customers_invoice_receive_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_receive_payments');
    }
}
