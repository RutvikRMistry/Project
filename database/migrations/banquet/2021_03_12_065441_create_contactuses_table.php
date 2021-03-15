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
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_contactuses');
            //$table->foreignid('event_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('expected_guest', 25)->nullable();
            $table->string('guarnteed_guest', 25)->nullable();

            $table->unsignedBigInteger('type_event_id')->nullable()->index('type_event_contactuses');
            //$table->foreignid('type_event_id')->constrained('type_event')->onUpdate('cascade')->onDelete('cascade');

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
