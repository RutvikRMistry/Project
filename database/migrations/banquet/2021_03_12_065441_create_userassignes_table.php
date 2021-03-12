<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserassignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userassignes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type');
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('contact');
            $table->integer('user_id')->index('users_userassignes');
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
        Schema::dropIfExists('userassignes');
    }
}
