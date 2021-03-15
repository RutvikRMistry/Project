<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_login', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index('users_user_login');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('ip_address', 191);
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
        Schema::dropIfExists('user_login');
    }
}
