<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGuestPickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest_pickups', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_guest_pickups')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('transportation_id', 'transportation_service_guest_pickups')->references('id')->on('transportation_service')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guest_pickups', function (Blueprint $table) {
            $table->dropForeign('eventdetails_guest_pickups');
            $table->dropForeign('transportation_service_guest_pickups');
        });
    }
}
