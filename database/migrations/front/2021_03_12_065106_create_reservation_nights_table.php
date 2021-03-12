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
            $table->integer('id', true);
            $table->integer('reservation_id')->index('reservations_reservation_nights');
            $table->integer('room_id')->nullable()->index('rooms_reservation_nights');
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
        Schema::connection('mysql_front')->drop('reservation_nights', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
