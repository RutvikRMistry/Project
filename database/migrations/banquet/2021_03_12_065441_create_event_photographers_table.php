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
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->index('eventdetails_event_photographers');
            $table->integer('day');
            $table->integer('photographer_id')->nullable()->index('photographers_event_photographers');
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
