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
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('main_menu_id')->index('main_menu_menu');
            //$table->foreignid('main_menu_id')->constrained('main_menu')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('menu_type');

            $table->unsignedBigInteger('sub_menu_id')->index('sub_menu_menu');
            //$table->foreignid('sub_menu_id')->constrained('sub_menu_id')->onUpdate('cascade')->onDelete('cascade');

            $table->string('description');
            $table->string('status');
            $table->string('price');
            $table->string('hours')->nullable();
            $table->string('persons')->nullable();
            $table->string('additional');

            $table->unsignedBigInteger('user_id')->index('users_menu');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
