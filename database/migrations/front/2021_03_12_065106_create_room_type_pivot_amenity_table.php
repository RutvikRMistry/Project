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
            $table->id();
            $table->unsignedBigInteger('room_type_id')->index('room_types_room_type_pivot_amenity');
            $table->foreignId('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_type_id', 'room_types_room_type_pivot_amenity')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('amenity_id')->index('amenities_room_type_pivot_amenity');
            $table->foreignId('amenity_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('amenity_id', 'amenities_room_type_pivot_amenity')->references('id')->on('amenities')->onUpdate('RESTRICT')->onDelete('RESTRICT');

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
        Schema::connection('mysql_front')->drop('room_type_pivot_amenity');
    }
}
