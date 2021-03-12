<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('transactions', function (Blueprint $table) {
            $table->foreign('business_id', 'business_transactions')->references('id')->on('business')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contact_id', 'contacts_transactions')->references('id')->on('contacts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('customer_group_id', 'customer_groups_transactions')->references('id')->on('customer_groups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('res_table_id', 'res_table_id_transactions')->references('id')->on('res_tables')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('transactions', function (Blueprint $table) {
            $table->dropForeign('business_transactions');
            $table->dropForeign('contacts_transactions');
            $table->dropForeign('customer_groups_transactions');
            $table->dropForeign('res_table_id_transactions');
        });
    }
}
