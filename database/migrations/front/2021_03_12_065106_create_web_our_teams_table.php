<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('web_our_teams', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->string('fb', 191)->nullable();
            $table->string('tw', 191)->nullable();
            $table->string('lin', 191)->nullable();
            $table->string('gp', 191)->nullable();
            $table->string('image', 191)->nullable();
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
        Schema::connection('mysql_front')->drop('web_our_teams', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
        });
    }
}
