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
            $table->id();

            $table->unsignedBigInteger('user_id')->index('users_customers');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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

            $table->unsignedBigInteger('company_id')->index('companies_customers');
            //$table->foreignid('company_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_customers');
            //$table->foreignid('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
