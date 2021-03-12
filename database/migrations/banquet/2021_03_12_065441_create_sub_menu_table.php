<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('main_menu_id')->index('main_menu_sub_menu');
            $table->integer('menu_type');
            $table->string('name');
            $table->string('price')->nullable();
            $table->integer('min_person')->nullable();
            $table->integer('max_person')->nullable();
            $table->string('times', 50)->nullable();
            $table->integer('user_id')->index('users_sub_menu');
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
        Schema::dropIfExists('sub_menu');
    }
}
