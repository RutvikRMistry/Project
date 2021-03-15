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
            $table->id();
            $table->string('company_name', 191)->nullable();

            $table->unsignedBigInteger('country_id')->index('countries_leads');
            //$table->foreignid('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('state_id')->nullable()->index('statesleads');
            //$table->foreignid('state_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable()->index('cities_leads');
            //$table->foreignid('city_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('sales_person_id')->nullable();
            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_leads');
            //$table->foreignid('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('email', 191);
            $table->string('event_type', 191);
            $table->string('mobile', 191);
            $table->string('priority', 191)->nullable();
          
            $table->unsignedBigInteger('user_id')->index('users_leads');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
