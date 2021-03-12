<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('payments', function (Blueprint $table) {
            $table->foreign('gateway_id', 'gateways_payments')->references('id')->on('gateways')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('reservation_id', 'reservations_payment')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_payments')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('payments', function (Blueprint $table) {
            $table->dropForeign('gateways_payments');
            $table->dropForeign('reservations_payment');
            $table->dropForeign('users_payments');
        });
    }
}
