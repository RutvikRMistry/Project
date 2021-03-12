<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('customer_groups', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_customer_groups');
            $table->string('name', 191);
            $table->double('amount', 5, 2);
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->drop('customer_groups', function (Blueprint $table) {
            
            
            
            
            
            
        });
    }
}
