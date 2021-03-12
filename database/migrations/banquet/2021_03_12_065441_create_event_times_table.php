<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_times', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lead_id')->nullable()->index('leads_event_times');
            $table->integer('event_id')->nullable()->index('eventdetails_event_times');
            $table->string('occasion', 100)->nullable();
            $table->integer('location_id')->nullable()->index('event_location_event_times');
            $table->string('location_rent')->nullable();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->time('setup');
            $table->time('teardown');
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
        Schema::dropIfExists('event_times');
    }
}
