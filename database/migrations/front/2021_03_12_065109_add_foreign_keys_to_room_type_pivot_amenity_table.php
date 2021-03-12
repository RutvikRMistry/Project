<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoomTypePivotAmenityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('room_type_pivot_amenity', function (Blueprint $table) {
            $table->foreign('amenity_id', 'amenities_room_type_pivot_amenity')->references('id')->on('amenities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('room_type_id', 'room_types_room_type_pivot_amenity')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('room_type_pivot_amenity', function (Blueprint $table) {
            $table->dropForeign('amenities_room_type_pivot_amenity');
            $table->dropForeign('room_types_room_type_pivot_amenity');
        });
    }
}
