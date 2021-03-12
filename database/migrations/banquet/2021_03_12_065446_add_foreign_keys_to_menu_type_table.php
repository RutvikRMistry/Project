<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMenuTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_type', function (Blueprint $table) {
            $table->foreign('main_menu_id', 'main_menu_menu_type')->references('id')->on('main_menu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_menu_type')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_type', function (Blueprint $table) {
            $table->dropForeign('main_menu_menu_type');
            $table->dropForeign('users_menu_type');
        });
    }
}
