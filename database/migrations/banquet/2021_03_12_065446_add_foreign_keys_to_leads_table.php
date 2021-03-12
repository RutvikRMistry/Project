<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->foreign('city_id', 'cities_leads')->references('id')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('country_id', 'countries_leads')->references('id')->on('countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('sales_team_id', 'sales_teams_leads')->references('id')->on('sales_teams')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('state_id', 'statesleads')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_leads')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign('cities_leads');
            $table->dropForeign('countries_leads');
            $table->dropForeign('sales_teams_leads');
            $table->dropForeign('statesleads');
            $table->dropForeign('users_leads');
        });
    }
}
