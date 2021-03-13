<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('opportunity', 191);
            $table->string('stages', 191);

            $table->unsignedBigInteger('customer_id')->index('customers_opportunities');
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->double('expected_revenue');
            $table->string('probability', 191);
            $table->string('email', 191);
            $table->bigInteger('phone');

            $table->integer('sales_person_id');

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_opportunities');
            $table->foreignId('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->date('next_action');
            $table->string('next_action_title', 191);
            $table->date('expected_closing');
            $table->string('priority', 191);
            $table->string('tags', 191)->nullable();
            $table->string('lost_reason', 191)->nullable();
            $table->text('internal_notes')->nullable();
            $table->integer('assigned_partner_id')->nullable();
           
            $table->unsignedBigInteger('user_id')->index('users_opportunities');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
            $table->string('product_name', 191);
            $table->string('team_name', 191);
            $table->string('staff', 191);
            $table->text('additional_info');
            $table->string('mobile', 191);
            $table->string('salesteam', 191);
            $table->string('company_name', 191);
            $table->integer('is_archived');
            $table->integer('is_delete_list');
            $table->integer('is_converted_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
