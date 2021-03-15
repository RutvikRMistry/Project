<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_teams', function (Blueprint $table) {
            $table->id();
            $table->string('salesteam', 191);
            $table->integer('team_leader');
            $table->double('invoice_target', 15, 2);
            $table->double('invoice_forecast', 15, 2);
            $table->string('team_members', 191);
            $table->string('commision', 191)->nullable();
            $table->tinyInteger('leads')->default(0);
            $table->tinyInteger('quotations')->default(0);
            $table->tinyInteger('opportunities')->default(0);
            $table->text('notes')->nullable();

            $table->unsignedBigInteger('user_id')->index('users_sales_teams');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('sales_teams');
    }
}
