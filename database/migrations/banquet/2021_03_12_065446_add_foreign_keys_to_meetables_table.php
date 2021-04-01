<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMeetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meetables', function (Blueprint $table) {
            $table->foreign('meeting_id', 'meetings_meetables')->references('id')->on('meetings')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_meetables')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meetables', function (Blueprint $table) {
            $table->dropForeign('meetings_meetables');
            $table->dropForeign('users_meetables');
        });
    }
}
