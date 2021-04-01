<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEatingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eating_times', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_eating_times')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eating_times', function (Blueprint $table) {
            $table->dropForeign('eventdetails_eating_times');
        });
    }
}
