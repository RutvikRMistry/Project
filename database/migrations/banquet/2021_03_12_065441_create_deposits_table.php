<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->index('eventdetails_deposits');
            $table->string('deposit_due')->nullable();
            $table->string('sec_deposit_du')->nullable();
            $table->string('sec_deposit', 25)->nullable();
            $table->string('balance_due')->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
