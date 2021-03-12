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
            $table->foreign('location_id', 'event_location_event_times')->references('id')->on('event_location')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('event_id', 'eventdetails_event_times')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('lead_id', 'leads_event_times')->references('id')->on('leads')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
