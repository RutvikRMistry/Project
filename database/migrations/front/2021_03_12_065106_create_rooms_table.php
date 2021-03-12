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
            $table->integer('id', true);
            $table->integer('room_type_id')->index('room_types_rooms');
            $table->integer('floor_id')->index('floors_rooms');
            $table->string('image', 191)->nullable();
            $table->integer('number')->unique('number');
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
        Schema::connection('mysql_front')->drop('rooms', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
