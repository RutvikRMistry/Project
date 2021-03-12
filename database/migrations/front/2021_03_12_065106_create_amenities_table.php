<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('amenities', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191)->unique('name');
            $table->string('image', 191)->nullable();
            $table->text('description')->nullable();
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
        Schema::connection('mysql_front')->drop('amenities', function (Blueprint $table) {
            
            
            
            
            
            
            
        });
    }
}
