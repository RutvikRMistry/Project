<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventEntertainmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_entertainment', function (Blueprint $table) {
            $table->foreign('entertainment_id', 'entertainment_event_entertainment')->references('id')->on('entertainment')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('event_id', 'eventdetails_event_entertainment')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_entertainment', function (Blueprint $table) {
            $table->dropForeign('entertainment_event_entertainment');
            $table->dropForeign('eventdetails_event_entertainment');
        });
    }
}
