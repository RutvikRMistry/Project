<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventdetails', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('booking_id')->index('bookingdetails_eventdetails');
            $table->integer('owner_id')->index('owners_eventdetails');
            $table->integer('sales_team_id')->index('sales_teams_eventdetails');
            $table->string('name');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('start_time');
            $table->string('end_time');
            $table->string('rooms');
            $table->string('status');
            $table->integer('leadsources_id')->nullable();
            $table->integer('from_lead');
            $table->integer('country_id')->index('countries_eventdetails');
            $table->integer('state_id')->index('stateseventdetails');
            $table->integer('city_id')->index('cities_eventdetails');
            $table->string('created_by', 50);
            $table->integer('user_id')->index('users_eventdetails');
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
        Schema::dropIfExists('eventdetails');
    }
}
