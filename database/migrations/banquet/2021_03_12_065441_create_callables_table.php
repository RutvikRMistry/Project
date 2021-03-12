<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callables', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('callable_id');
            $table->string('callable_type', 191);
            $table->integer('call_id')->index('calls_callables');
            $table->integer('user_id')->index('users_callables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('callables');
    }
}
