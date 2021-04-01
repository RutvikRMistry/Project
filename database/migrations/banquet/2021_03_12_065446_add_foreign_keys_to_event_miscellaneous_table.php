<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventMiscellaneousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_miscellaneous', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_event_miscellaneous')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_miscellaneous', function (Blueprint $table) {
            $table->dropForeign('eventdetails_event_miscellaneous');
        });
    }
}
