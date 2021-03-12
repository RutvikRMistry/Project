<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('company_name', 191)->nullable();
            $table->integer('country_id')->index('countries_leads');
            $table->integer('state_id')->nullable()->index('statesleads');
            $table->integer('city_id')->nullable()->index('cities_leads');
            $table->integer('sales_person_id')->nullable();
            $table->integer('sales_team_id')->index('sales_teams_leads');
            $table->string('email', 191);
            $table->string('event_type', 191);
            $table->string('mobile', 191);
            $table->string('priority', 191)->nullable();
            $table->integer('user_id')->index('users_leads');
            $table->timestamps();
            $table->softDeletes();
            $table->string('client_name', 191);
            $table->text('additionl_info');
            $table->string('location', 191)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('budget', 100)->default('0');
            $table->integer('expected_guests_veg')->nullable();
            $table->integer('expected_guests_non_veg')->nullable();
            $table->string('event_name', 191);
            $table->integer('lead_source');
            $table->integer('event_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
