<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->index('eventdetails_contactuses');
            $table->string('expected_guest', 25)->nullable();
            $table->string('guarnteed_guest', 25)->nullable();
            $table->integer('type_event_id')->nullable()->index('type_event_contactuses');
            $table->string('manager')->nullable();
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
        Schema::dropIfExists('contactuses');
    }
}
