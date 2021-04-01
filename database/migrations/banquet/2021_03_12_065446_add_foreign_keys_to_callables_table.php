<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCallablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('callables', function (Blueprint $table) {
            $table->foreign('call_id', 'calls_callables')->references('id')->on('calls')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_callables')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('callables', function (Blueprint $table) {
            $table->dropForeign('calls_callables');
            $table->dropForeign('users_callables');
        });
    }
}
