<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('customer_id', 'customers_invoices')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('qtemplate_id', 'qtemplates_invoices')->references('id')->on('qtemplates')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('order_id', 'sales_orders_invoices')->references('id')->on('sales_orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_invoices')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_invoices')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('customers_invoices');
            $table->dropForeign('qtemplates_invoices');
            $table->dropForeign('sales_orders_invoices');
            $table->dropForeign('sales_teams_invoices');
            $table->dropForeign('users_invoices');
        });
    }
}
