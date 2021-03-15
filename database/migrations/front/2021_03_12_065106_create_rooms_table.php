<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_type_id')->index('room_types_rooms');
            //$table->foreignid('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_type_id', 'room_types_rooms')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('floor_id')->index('floors_rooms');
            //$table->foreignid('floor_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('floor_id', 'floors_rooms')->references('id')->on('floors')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->string('image', 191)->nullable();
            $table->unsignedBigInteger('number')->unique();
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::connection('mysql_front')->drop('rooms');
    }
}
