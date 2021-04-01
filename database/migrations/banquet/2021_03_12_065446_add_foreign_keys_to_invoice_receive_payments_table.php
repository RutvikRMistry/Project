<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoiceReceivePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_receive_payments', function (Blueprint $table) {
            $table->foreign('customer_id', 'customers_invoice_receive_payments')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('invoice_id', 'invoices_invoice_receive_payments')->references('id')->on('invoices')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_invoice_receive_payments')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_receive_payments', function (Blueprint $table) {
            $table->dropForeign('customers_invoice_receive_payments');
            $table->dropForeign('invoices_invoice_receive_payments');
            $table->dropForeign('users_invoice_receive_payments');
        });
    }
}
