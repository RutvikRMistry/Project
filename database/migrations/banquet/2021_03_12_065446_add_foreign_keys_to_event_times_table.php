<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_times', function (Blueprint $table) {
            $table->foreign('location_id', 'event_location_event_times')->references('id')->on('event_location')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_id', 'eventdetails_event_times')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('lead_id', 'leads_event_times')->references('id')->on('leads')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_times', function (Blueprint $table) {
            $table->dropForeign('event_location_event_times');
            $table->dropForeign('eventdetails_event_times');
            $table->dropForeign('leads_event_times');
        });
    }
}
