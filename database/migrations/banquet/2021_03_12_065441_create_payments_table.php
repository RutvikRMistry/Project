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
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->index('eventdetails_payments');
            $table->string('amount', 25);
            $table->string('due_date');
            $table->string('customer_facing_title');
            $table->string('internal_note')->nullable();
            $table->string('status', 50)->default('New');
            $table->integer('payment_method')->nullable();
            $table->string('card_no', 100)->nullable();
            $table->string('holder_name', 500)->nullable();
            $table->string('month_year', 100)->nullable();
            $table->string('cheque_no', 100)->nullable();
            $table->string('gift_card_no', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
