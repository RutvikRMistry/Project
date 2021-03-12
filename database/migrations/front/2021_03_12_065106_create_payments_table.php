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
            $table->integer('id', true);
            $table->integer('user_id')->index('users_payments');
            $table->integer('gateway_id')->index('gateways_payments');
            $table->integer('reservation_id')->nullable()->index('reservations_payment');
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
        Schema::connection('mysql_front')->drop('payments', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
