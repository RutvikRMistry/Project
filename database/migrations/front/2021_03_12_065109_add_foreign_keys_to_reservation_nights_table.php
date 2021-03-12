<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReservationNightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('reservation_nights', function (Blueprint $table) {
            $table->foreign('reservation_id', 'reservations_reservation_nights')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('room_id', 'rooms_reservation_nights')->references('id')->on('rooms')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('reservation_nights', function (Blueprint $table) {
            $table->dropForeign('reservations_reservation_nights');
            $table->dropForeign('rooms_reservation_nights');
        });
    }
}
