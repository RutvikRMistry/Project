<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_rooms', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('hotel_id')->index('hotels_event_rooms');
            $table->string('room_name', 100);
            $table->integer('user_id')->index('users_event_rooms');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_rooms');
    }
}
