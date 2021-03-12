<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->string('name', 191)->unique('name');
            $table->integer('plan_id');
            $table->string('best_for', 191)->nullable();
            $table->double('cost', 8, 2);
            $table->double('transaction_fee', 8, 2)->nullable()->default(0.00);
            $table->double('marketplace_commission', 8, 2)->nullable()->default(0.00);
            $table->integer('event_per_month')->nullable();
            $table->integer('team_size')->nullable();
            $table->tinyInteger('active');
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
        Schema::dropIfExists('subscription_plans');
    }
}
