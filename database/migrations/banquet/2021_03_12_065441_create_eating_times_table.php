<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEatingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eating_times', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->index('eventdetails_eating_times');
            $table->foreignId('event_id')->constrained('eventdatails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');
            $table->string('service_time', 50)->nullable();
            $table->string('canapes', 50)->nullable();
            $table->string('morning_tea_time', 100)->nullable();
            $table->string('morning_snacks_time', 100)->nullable();
            $table->string('lunch_time', 100)->nullable();
            $table->string('evening_tea_time', 100)->nullable();
            $table->string('evening_snacks_time', 100)->nullable();
            $table->string('dinner_time', 100)->nullable();
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
        Schema::dropIfExists('eating_times');
    }
}
