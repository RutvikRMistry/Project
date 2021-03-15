<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_photographers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_event_photographers');
            //$table->foreignid('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');

            $table->unsignedBigInteger('photographer_id')->nullable()->index('photographers_event_photographers');
            //$table->foreignid('photographer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('event_photographers');
    }
}
