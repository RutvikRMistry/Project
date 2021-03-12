<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->string('email', 191);
            $table->text('password');
            $table->string('lostpw', 191);
            $table->text('address');
            $table->string('website', 191);
            $table->string('phone', 191);
            $table->string('mobile', 191)->nullable();
            $table->string('category', 100)->nullable();
            $table->string('fax', 191)->nullable();
            $table->string('title', 191);
            $table->string('company_avatar', 191)->nullable();
            $table->string('company_attachment', 191);
            $table->integer('main_contact_person');
            $table->integer('sales_team_id')->index('sales_teams_companies');
            $table->integer('country_id')->index('countries_companies');
            $table->integer('state_id')->nullable()->index('statescompanies');
            $table->integer('city_id')->nullable()->index('cities_companies');
            $table->string('longitude', 191);
            $table->string('latitude', 191);
            $table->integer('user_id')->index('users_companies');
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
        Schema::dropIfExists('companies');
    }
}
