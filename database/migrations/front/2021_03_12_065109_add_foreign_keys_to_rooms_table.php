<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('rooms', function (Blueprint $table) {
            $table->foreign('floor_id', 'floors_rooms')->references('id')->on('floors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('room_type_id', 'room_types_rooms')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('rooms', function (Blueprint $table) {
            $table->dropForeign('floors_rooms');
            $table->dropForeign('room_types_rooms');
        });
    }
}
