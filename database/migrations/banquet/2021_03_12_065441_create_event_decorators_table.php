<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDecoratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_decorators', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->index('eventdetails_event_decorators');
            $table->integer('day');
            $table->integer('decorator_id')->nullable()->index('decorators_event_decorators');
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
        Schema::dropIfExists('event_decorators');
    }
}
