<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->foreign('customer_id', 'customers_sales_orders')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('qtemplate_id', 'qtemplates_sales_orders')->references('id')->on('qtemplates')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('quotation_id', 'quotations_sales_orders')->references('id')->on('quotations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_sales_orders')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_sales_orders')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->dropForeign('customers_sales_orders');
            $table->dropForeign('qtemplates_sales_orders');
            $table->dropForeign('quotations_sales_orders');
            $table->dropForeign('sales_teams_sales_orders');
            $table->dropForeign('users_sales_orders');
        });
    }
}
