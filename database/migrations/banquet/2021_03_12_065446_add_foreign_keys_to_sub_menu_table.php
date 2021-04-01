<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_menu', function (Blueprint $table) {
            $table->foreign('main_menu_id', 'main_menu_sub_menu')->references('id')->on('main_menu')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_sub_menu')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_menu', function (Blueprint $table) {
            $table->dropForeign('main_menu_sub_menu');
            $table->dropForeign('users_sub_menu');
        });
    }
}
