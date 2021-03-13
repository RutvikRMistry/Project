<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTaskAssignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_task_assignes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->index('eventdetails_event_task_assignes');
            $table->foreignId('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('assignes_id');
            $table->foreignId('assignes_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('dead_line')->useCurrent();
            $table->string('priority');
            $table->string('description');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_task_assignes');
    }
}
