<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('packages', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name')->nullable();
            $table->integer('business_locations')->nullable()->comment('unlimited = -1');
            $table->integer('users')->nullable()->comment('unlimited = -1');
            $table->integer('products')->nullable()->comment('unlimited = -1');
            $table->integer('invoices')->nullable()->comment('unlimited = -1');
            $table->integer('trial_days')->nullable()->comment('unlimited = -1');
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->text('permissions');
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
        Schema::connection('mysql_pos')->drop('packages', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
