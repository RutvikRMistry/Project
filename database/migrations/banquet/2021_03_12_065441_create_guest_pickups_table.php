<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestPickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_pickups', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->nullable()->index('eventdetails_guest_pickups');
            $table->integer('day');
            $table->integer('hotel')->nullable();
            $table->text('room')->nullable();
            $table->integer('transportation_id')->nullable()->index('transportation_service_guest_pickups');
            $table->string('time_of_departure')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('van_choice')->nullable();
            $table->string('contact_on_day', 25)->nullable();
            $table->string('contact_phone', 25)->nullable();
            $table->string('staff_choice')->nullable();
            $table->string('function_address')->nullable();
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
        Schema::dropIfExists('guest_pickups');
    }
}
