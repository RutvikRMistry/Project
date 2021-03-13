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
            $table->id();
            $table->integer('meetable_id');
            $table->string('meetable_type', 191);

            $table->unsignedBigInteger('meeting_id')->index('meetings_meetables');
            $table->foreignId('meeting_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index('users_meetables');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
