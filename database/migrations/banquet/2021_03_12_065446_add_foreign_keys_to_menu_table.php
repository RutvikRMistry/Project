<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu', function (Blueprint $table) {
            $table->foreign('main_menu_id', 'main_menu_menu')->references('id')->on('main_menu')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sub_menu_id', 'sub_menu_menu')->references('id')->on('sub_menu')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_menu')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu', function (Blueprint $table) {
            $table->dropForeign('main_menu_menu');
            $table->dropForeign('sub_menu_menu');
            $table->dropForeign('users_menu');
        });
    }
}
