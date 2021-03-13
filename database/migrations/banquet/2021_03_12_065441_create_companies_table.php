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
            $table->id();
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

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_companies');
            $table->foreignId('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('country_id')->index('countries_companies');
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('state_id')->nullable()->index('statescompanies');
            $table->foreignId('state_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable()->index('cities_companies');
            $table->foreignId('city_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('longitude', 191);
            $table->string('latitude', 191);

            $table->unsignedBigInteger('user_id')->index('users_companies');
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
        Schema::dropIfExists('companies');
    }
}
