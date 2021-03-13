<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetuptearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setuptears', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->index('eventdetails_setuptears');
            $table->foreignId('event_id')->constrained('eventdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->string('setup');
            $table->string('teardown');
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
        Schema::dropIfExists('setuptears');
    }
}
