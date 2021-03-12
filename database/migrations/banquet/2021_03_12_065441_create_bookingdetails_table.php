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
            $table->integer('id', true);
            $table->string('booking_name');
            $table->integer('location_id')->nullable()->index('event_location_bookingdetails');
            $table->string('client_email')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('client_company')->nullable();
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('user_id')->index('users_bookingdetails');
            $table->integer('country_id')->index('countries_bookingdetails');
            $table->integer('state_id')->index('statesbookingdetails');
            $table->integer('city_id')->nullable()->index('cities_bookingdetails');
            $table->integer('sales_person_id');
            $table->integer('sales_team_id')->index('sales_teams_bookingdetails');
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
