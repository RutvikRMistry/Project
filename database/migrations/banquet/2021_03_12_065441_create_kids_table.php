<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_kids');
            //$table->foreignid('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->string('under_12_years', 25)->nullable();
            $table->string('under_5_years', 25)->nullable();
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
        Schema::dropIfExists('kids');
    }
}
