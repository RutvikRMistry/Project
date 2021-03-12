<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('payment_accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_payment_accounts');
            $table->string('name', 191);
            $table->string('type', 191);
            $table->text('note');
            $table->integer('created_by');
            $table->softDeletes();
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
        Schema::connection('mysql_pos')->drop('payment_accounts', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
