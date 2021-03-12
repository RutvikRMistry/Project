<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetables', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('meetable_id');
            $table->string('meetable_type', 191);
            $table->integer('meeting_id')->index('meetings_meetables');
            $table->integer('user_id')->index('users_meetables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetables');
    }
}
