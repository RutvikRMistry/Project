<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationNightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('reservation_nights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id')->index('reservations_reservation_nights');
            $table->foreignId('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('reservation_id', 'reservations_reservation_nights')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('room_id')->nullable()->index('rooms_reservation_nights');
            $table->foreignId('room_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_id', 'rooms_reservation_nights')->references('id')->on('rooms')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->date('date')->nullable();
            $table->dateTime('check_in')->nullable();
            $table->dateTime('check_out')->nullable();
            $table->double('price', 18, 2);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->drop('reservation_nights');
    }
}
