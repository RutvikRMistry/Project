<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('users_customers');
            $table->string('first_name', 191);
            $table->string('last_name', 191);
            $table->integer('belong_user_id');
            $table->text('address')->nullable();
            $table->string('website', 191)->nullable();
            $table->string('job_position', 191)->nullable();
            $table->string('mobile', 191)->nullable();
            $table->string('fax', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->string('company_avatar', 191);
            $table->integer('company_id')->index('companies_customers');
            $table->integer('sales_team_id')->index('sales_teams_customers');
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
        Schema::dropIfExists('customers');
    }
}
