<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('business_locations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_business_locations_business');
            $table->integer('location_id');
            $table->string('name', 256);
            $table->text('landmark');
            $table->string('country', 100);
            $table->string('state', 100);
            $table->string('city', 100);
            $table->char('zip_code', 7);
            $table->integer('invoice_scheme_id')->index('invoice_schemes_business_locations');
            $table->integer('invoice_layout_id')->index('invoice_layouts_business_locations');
            $table->tinyInteger('print_receipt_on_invoice')->nullable()->default(1);
            $table->enum('receipt_printer_type', ['browser', 'printer'])->default('browser');
            $table->integer('printer_id')->nullable()->index('printers_business_locations');
            $table->string('mobile', 191)->nullable();
            $table->string('alternate_number', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('website', 191)->nullable();
            $table->string('custom_field1', 191)->nullable();
            $table->string('custom_field2', 191)->nullable();
            $table->string('custom_field3', 191)->nullable();
            $table->string('custom_field4', 191)->nullable();
            $table->softDeletes();
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
        Schema::connection('mysql_pos')->drop('business_locations', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
