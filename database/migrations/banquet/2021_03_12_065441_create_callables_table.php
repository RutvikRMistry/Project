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
            $table->id();
            $table->integer('callable_id');
            $table->string('callable_type', 191);

            $table->unsignedBigInteger('call_id')->index('calls_callables');
            //$table->foreignid('call_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index('users_callables');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
