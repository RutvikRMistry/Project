<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index('users_payments');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('user_id', 'users_payments')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('gateway_id')->index('gateways_payments');
            //$table->foreignid('gateway_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('gateway_id', 'gateways_payments')->references('id')->on('gateways')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('reservation_id')->nullable()->index('reservations_payment');
            //$table->foreignid('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('reservation_id', 'reservations_payment')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->double('amount', 8, 2)->default(0.00);
            $table->double('usd_amo', 8, 2)->default(0.00);
            $table->string('trx', 191);
            $table->tinyInteger('status')->default(0);
            $table->enum('type', ['online', 'offline'])->default('online');
            $table->tinyInteger('try')->default(0);
            $table->double('btc_amo', 8, 2)->default(0.00);
            $table->double('btc_wallet', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('payments');
    }
}
