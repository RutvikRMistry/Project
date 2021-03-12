<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('room_types', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 191)->unique('title');
            $table->string('slug', 191)->unique('slug');
            $table->string('short_code', 191)->unique('short_code');
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('higher_capacity')->default(0);
            $table->integer('kids_capacity')->default(0);
            $table->double('base_price', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('room_types', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
