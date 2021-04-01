<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventPhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_photographers', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_event_photographers')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('photographer_id', 'photographers_event_photographers')->references('id')->on('photographers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_photographers', function (Blueprint $table) {
            $table->dropForeign('eventdetails_event_photographers');
            $table->dropForeign('photographers_event_photographers');
        });
    }
}
