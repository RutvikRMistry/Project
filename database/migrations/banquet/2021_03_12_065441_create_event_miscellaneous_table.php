<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMiscellaneousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_miscellaneous', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->index('eventdetails_event_miscellaneous');
            //$table->foreignid('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');
            $table->string('miscellaneous');
            $table->string('service_needed')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('event_miscellaneous');
    }
}
