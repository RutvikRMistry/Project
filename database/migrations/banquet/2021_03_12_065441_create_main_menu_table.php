<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('min_person', 50)->nullable();
            $table->string('max_person', 50)->nullable();
            $table->string('tables', 50)->nullable();

            $table->unsignedBigInteger('user_id')->index('users_main_menu');
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
        Schema::dropIfExists('main_menu');
    }
}
