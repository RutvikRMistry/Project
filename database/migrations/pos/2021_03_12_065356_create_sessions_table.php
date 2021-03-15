<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('sessions', function (Blueprint $table) {
            $table->string('id', 191)->unique();

            $table->unsignedBigInteger('user_id')->nullable()->index('users_sessions');
            // $table->foreign('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent');
            $table->text('payload');
            $table->integer('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('sessions');
    }
}
