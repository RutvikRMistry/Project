<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebOurClientFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('web_our_client_feedbacks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('feed')->nullable();
            $table->string('name', 191)->nullable();
            $table->string('title', 191)->nullable();
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
        Schema::connection('mysql_front')->drop('web_our_client_feedbacks', function (Blueprint $table) {
            
            
            
            
            
            
        });
    }
}
