<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventdetails', function (Blueprint $table) {
            $table->foreign('booking_id', 'bookingdetails_eventdetails')->references('id')->on('bookingdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('city_id', 'cities_eventdetails')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('country_id', 'countries_eventdetails')->references('id')->on('countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('owner_id', 'owners_eventdetails')->references('id')->on('owners')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_eventdetails')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('state_id', 'stateseventdetails')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_eventdetails')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventdetails', function (Blueprint $table) {
            $table->dropForeign('bookingdetails_eventdetails');
            $table->dropForeign('cities_eventdetails');
            $table->dropForeign('countries_eventdetails');
            $table->dropForeign('owners_eventdetails');
            $table->dropForeign('sales_teams_eventdetails');
            $table->dropForeign('stateseventdetails');
            $table->dropForeign('users_eventdetails');
        });
    }
}
