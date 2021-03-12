<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtasks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->index('eventdetails_addtasks');
            $table->string('task_description');
            $table->string('assigned_to');
            $table->string('dead_line');
            $table->string('priority');
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
        Schema::dropIfExists('addtasks');
    }
}
