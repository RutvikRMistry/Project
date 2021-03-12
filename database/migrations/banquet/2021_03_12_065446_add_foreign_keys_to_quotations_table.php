<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->foreign('customer_id', 'customers_quotations')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('opportunity_id', 'opportunities_quotations')->references('id')->on('opportunities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('qtemplate_id', 'qtemplates_quotations')->references('id')->on('qtemplates')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_quotations')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_quotations')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotations', function (Blueprint $table) {
            $table->dropForeign('customers_quotations');
            $table->dropForeign('opportunities_quotations');
            $table->dropForeign('qtemplates_quotations');
            $table->dropForeign('sales_teams_quotations');
            $table->dropForeign('users_quotations');
        });
    }
}
