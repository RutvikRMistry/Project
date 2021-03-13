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
            $table->id();

            $table->unsignedBigInteger('hotel_id')->index('hotels_event_rooms');
            $table->foreignId('hotel_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('room_name', 100);

            $table->unsignedBigInteger('user_id')->index('users_event_rooms');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
