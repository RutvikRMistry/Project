<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersistencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persistences', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->index('users_persistences');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            
            $table->string('code', 191)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persistences');
    }
}
