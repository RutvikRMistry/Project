<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('posts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cat_id')->nullable();
            $table->string('title', 191);
            $table->string('image', 191)->nullable();
            $table->string('thumb', 191)->nullable();
            $table->longText('details')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('hit')->default(0);
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
        Schema::connection('mysql_front')->drop('posts', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
        });
    }
}
