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
            $table->foreign('customer_id', 'customers_quotations')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('opportunity_id', 'opportunities_quotations')->references('id')->on('opportunities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('qtemplate_id', 'qtemplates_quotations')->references('id')->on('qtemplates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sales_team_id', 'sales_teams_quotations')->references('id')->on('sales_teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_quotations')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
