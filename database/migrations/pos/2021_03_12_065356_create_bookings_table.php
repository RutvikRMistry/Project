<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_id')->index('contacts_ookings');
            // $table->foreign('contact_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('waiter_id')->nullable();
            $table->integer('table_id')->nullable();
            $table->integer('correspondent_id')->nullable();

            $table->unsignedBigInteger('business_id')->index('business_business_bookings');
            // $table->foreign('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('location_id')->index('contacts_bookings');
            // $table->foreign('location_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->dateTime('booking_start');
            $table->dateTime('booking_end');
            $table->integer('created_by');
            $table->enum('booking_status', ['booked', 'completed', 'cancelled']);
            $table->text('booking_note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('bookings');
    }
}
