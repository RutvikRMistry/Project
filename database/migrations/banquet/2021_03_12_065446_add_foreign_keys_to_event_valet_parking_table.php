<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventValetParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_valet_parking', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_event_valet_parking')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('parking_id', 'parking_event_valet_parking')->references('id')->on('parking')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_valet_parking', function (Blueprint $table) {
            $table->dropForeign('eventdetails_event_valet_parking');
            $table->dropForeign('parking_event_valet_parking');
        });
    }
}
