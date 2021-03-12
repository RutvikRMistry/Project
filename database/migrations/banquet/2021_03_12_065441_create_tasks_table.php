<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('users_tasks');
            $table->integer('task_from_user')->nullable();
            $table->tinyInteger('finished')->default(0);
            $table->string('task_description', 191)->nullable();
            $table->dateTime('task_deadline')->nullable();
            $table->timestamps();
            $table->integer('task_to_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
