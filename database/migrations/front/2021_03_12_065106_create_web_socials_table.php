<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('web_socials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->nullable();
            $table->string('color', 191)->nullable();
            $table->string('icon', 191)->nullable();
            $table->string('link', 191)->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
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
        Schema::connection('mysql_front')->drop('web_socials');
    }
}
