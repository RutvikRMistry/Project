<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_rooms', function (Blueprint $table) {
            $table->foreign('hotel_id', 'hotels_event_rooms')->references('id')->on('hotels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_event_rooms')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_rooms', function (Blueprint $table) {
            $table->dropForeign('hotels_event_rooms');
            $table->dropForeign('users_event_rooms');
        });
    }
}
