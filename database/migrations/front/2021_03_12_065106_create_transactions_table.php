<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('user_id', 'users_transactions')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('gateway_id')->unique();
            //$table->foreignid('gateway_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('gateway_id', 'gateways_transaction')->references('id')->on('gateways')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->string('amount', 191)->nullable();
            $table->string('remarks', 191)->nullable();
            $table->string('trx', 191)->nullable();
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
        Schema::connection('mysql_front')->drop('transactions');
    }
}
