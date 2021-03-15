<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinacialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finacials', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_finacials');
            //$table->foreignid('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->string('food_beverage_min', 25)->nullable();
            $table->string('grand_total', 25)->nullable();
            $table->string('rental_fee', 25)->nullable();
            $table->string('amount_due', 25)->nullable();
            $table->string('deposit_amount', 25)->nullable();
            $table->string('price_per_persons', 25)->nullable();
            $table->string('actual_amount', 25)->nullable();
            $table->integer('deposit_type')->nullable();
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
        Schema::dropIfExists('finacials');
    }
}
