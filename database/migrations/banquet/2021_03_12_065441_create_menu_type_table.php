<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('main_menu_id')->index('main_menu_menu_type');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('price_per_person')->nullable();
            $table->integer('user_id')->index('users_menu_type');
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
        Schema::dropIfExists('menu_type');
    }
}
