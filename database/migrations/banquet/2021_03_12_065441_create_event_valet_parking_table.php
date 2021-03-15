<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventValetParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_valet_parking', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_event_valet_parking');
            //$table->foreignid('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');

            $table->unsignedBigInteger('parking_id')->nullable()->index('parking_event_valet_parking');
            //$table->foreignid('parking_id')->constrained('parking')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('event_valet_parking');
    }
}
