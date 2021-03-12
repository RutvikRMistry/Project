<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('main_menu_id')->index('main_menu_menu');
            $table->integer('menu_type');
            $table->integer('sub_menu_id')->index('sub_menu_menu');
            $table->string('description');
            $table->string('status');
            $table->string('price');
            $table->string('hours')->nullable();
            $table->string('persons')->nullable();
            $table->string('additional');
            $table->integer('user_id')->index('users_menu');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
