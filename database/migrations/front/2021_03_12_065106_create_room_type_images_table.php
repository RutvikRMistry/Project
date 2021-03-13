<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('room_type_images', function (Blueprint $table) {
            $table->id();
            $table->string('image', 191);
            $table->unsignedBigInteger('room_type_id')->index('room_types_room_type_images');
            $table->foreignId('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_type_id', 'room_types_room_type_images')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->tinyInteger('featured')->default(0);
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
        Schema::connection('mysql_front')->drop('room_type_images');
    }
}
