<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->id();
            $table->string('booking_name');

            $table->unsignedBigInteger('location_id')->nullable()->index('event_location_bookingdetails');
            //$table->foreignid('location_id')->constrained('event_loaction')->onUpdate('cascade')->onDelete('cascade');

            $table->string('client_email')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('client_company')->nullable();
            $table->date('from_date');
            $table->date('to_date');
            $table->unsignedBigInteger('user_id')->index('users_bookingdetails');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('country_id')->index('countries_bookingdetails');
            //$table->foreignid('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('state_id')->index('statesbookingdetails');
            //$table->foreignid('state_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable()->index('cities_bookingdetails');
            //$table->foreignid('city_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('sales_person_id');

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_bookingdetails');
            //$table->foreignid('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('event_type', 191);
            $table->string('event_status', 191);
            $table->string('event_name', 191);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('lead_source');
            $table->integer('event_manager');
            $table->integer('expected_guests_veg');
            $table->integer('expected_guests_non_veg');
            $table->integer('guaranteed_guests_veg');
            $table->integer('guaranteed_guests_non_veg');
            $table->integer('from_lead')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingdetails');
    }
}
