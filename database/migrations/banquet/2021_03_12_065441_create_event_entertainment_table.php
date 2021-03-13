<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEntertainmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_entertainment', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_event_entertainment');
            $table->foreignId('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');

            $table->unsignedBigInteger('entertainment_id')->nullable()->index('entertainment_event_entertainment');
            $table->foreignId('entertainment_id')->constrained('entertainment')->onUpdate('cascade')->onDelete('cascade');

            $table->string('service_needed')->nullable();
            $table->string('quoted_price');
            $table->string('final_price');
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
        Schema::dropIfExists('event_entertainment');
    }
}
