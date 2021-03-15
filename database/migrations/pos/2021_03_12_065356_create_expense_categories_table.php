<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('expense_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);

            $table->unsignedBigInteger('business_id')->index('business_expense_categories');
            // $table->foreign('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('expense_categories');
    }
}
