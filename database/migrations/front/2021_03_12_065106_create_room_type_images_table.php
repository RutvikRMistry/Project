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
            $table->integer('id', true);
            $table->string('image', 191);
            $table->integer('room_type_id')->index('room_types_room_type_images');
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
        Schema::connection('mysql_front')->drop('room_type_images', function (Blueprint $table) {
            
            
            
            
            
        });
    }
}
