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
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('business_id')->index('business_expense_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('expense_categories', function (Blueprint $table) {
            
            
            
        });
    }
}
