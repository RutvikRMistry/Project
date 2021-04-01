<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('city_id', 'cities_companies')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country_id', 'countries_companies')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sales_team_id', 'sales_teams_companies')->references('id')->on('sales_teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state_id', 'statescompanies')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'users_companies')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign('cities_companies');
            $table->dropForeign('countries_companies');
            $table->dropForeign('sales_teams_companies');
            $table->dropForeign('statescompanies');
            $table->dropForeign('users_companies');
        });
    }
}
