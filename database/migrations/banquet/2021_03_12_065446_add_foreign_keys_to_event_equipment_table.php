<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_equipment', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_event_equipment')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_equipment', function (Blueprint $table) {
            $table->dropForeign('eventdetails_event_equipment');
        });
    }
}
