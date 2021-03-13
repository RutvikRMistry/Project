<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('web_galleries', function (Blueprint $table) {
            $table->id();

            $table->string('image', 191)->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->index('categories_web_galleries');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('category_id', 'categories_web_galleries')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->enum('type', ['image', 'url', 'video']);
            $table->string('link', 191)->nullable();
            
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
        Schema::connection('mysql_front')->drop('web_galleries');
    }
}
