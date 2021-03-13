<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->text('meeting_subject');
            $table->string('attendees', 191);
            $table->integer('responsible_id');
            $table->dateTime('starting_date');
            $table->dateTime('ending_date');
            $table->tinyInteger('all_day')->default(0);
            $table->string('location', 191);
            $table->string('meeting_description', 191)->nullable();
            $table->string('privacy', 191)->nullable();
            $table->string('show_time_as', 191)->nullable();
            $table->string('duration', 191)->nullable();

            $table->unsignedBigInteger('user_id')->index('users_meetings');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
            $table->string('company_attendees', 191);
            $table->string('staff_attendees', 191);
            $table->string('company_name', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
