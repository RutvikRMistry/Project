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
            $table->id();

            $table->unsignedBigInteger('booking_id')->index('bookingdetails_eventdetails');
            $table->foreignId('booking_id')->constrained('bookingdetails')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('owner_id')->index('owners_eventdetails');
            $table->foreignId('owner_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_eventdetails');
            $table->foreignId('booking_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('state_id')->index('stateseventdetails');
            $table->foreignId('state_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->index('cities_eventdetails');
            $table->foreignId('city_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('created_by', 50);

            $table->unsignedBigInteger('user_id')->index('users_eventdetails');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
