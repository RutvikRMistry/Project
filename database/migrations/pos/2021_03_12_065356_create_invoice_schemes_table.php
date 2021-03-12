<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('invoice_schemes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_invoice_schemes');
            $table->string('name', 191);
            $table->enum('scheme_type', ['blank', 'year']);
            $table->string('prefix', 191)->nullable();
            $table->integer('start_number')->nullable();
            $table->integer('invoice_count')->default(0);
            $table->integer('total_digits')->nullable();
            $table->tinyInteger('is_default')->default(0);
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
        Schema::connection('mysql_pos')->drop('invoice_schemes', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
        });
    }
}
