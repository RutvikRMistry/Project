<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookingdetails', function (Blueprint $table) {
            $table->foreign('city_id', 'cities_bookingdetails')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('country_id', 'countries_bookingdetails')->references('id')->on('countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('location_id', 'event_location_bookingdetails')->references('id')->on('event_location')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_bookingdetails')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('state_id', 'statesbookingdetails')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_bookingdetails')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookingdetails', function (Blueprint $table) {
            $table->dropForeign('cities_bookingdetails');
            $table->dropForeign('countries_bookingdetails');
            $table->dropForeign('event_location_bookingdetails');
            $table->dropForeign('sales_teams_bookingdetails');
            $table->dropForeign('statesbookingdetails');
            $table->dropForeign('users_bookingdetails');
        });
    }
}
