<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_menu', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->index('eventdetails_event_menu');
            $table->foreignId('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');
            $table->string('type', 50);

            $table->unsignedBigInteger('sub_menu_id')->nullable();
            $table->foreignId('sub_menu_id')->constrained('sub_menu')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('menu_items')->nullable();
            $table->string('price');
            $table->integer('service_type_id')->nullable();
            $table->integer('counters')->nullable();
            $table->integer('head_table')->nullable();
            $table->integer('dinning_table')->nullable();
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
        Schema::dropIfExists('event_menu');
    }
}
