<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('contacts', function (Blueprint $table) {
            $table->foreign('business_id', 'business_contacts')->references('id')->on('business')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('customer_group_id', 'customer_groups_contacts')->references('id')->on('customer_groups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('contacts', function (Blueprint $table) {
            $table->dropForeign('business_contacts');
            $table->dropForeign('customer_groups_contacts');
        });
    }
}
