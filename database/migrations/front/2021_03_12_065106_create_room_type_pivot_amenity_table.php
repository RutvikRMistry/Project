<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypePivotAmenityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('room_type_pivot_amenity', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('room_type_id')->index('room_types_room_type_pivot_amenity');
            $table->integer('amenity_id')->index('amenities_room_type_pivot_amenity');
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
        Schema::connection('mysql_front')->drop('room_type_pivot_amenity', function (Blueprint $table) {
            
            
            
            
        });
    }
}