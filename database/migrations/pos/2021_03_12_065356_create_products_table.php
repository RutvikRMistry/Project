<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('business_id')->index('business_products');
            $table->enum('type', ['single', 'variable', 'modifier'])->nullable();
            $table->integer('unit_id')->nullable()->index('units_products');
            $table->integer('brand_id')->nullable()->index('brandsproducts');
            $table->integer('category_id')->nullable()->index('categories_products');
            $table->integer('sub_category_id')->nullable();
            $table->integer('tax')->nullable();
            $table->enum('tax_type', ['inclusive', 'exclusive']);
            $table->tinyInteger('enable_stock')->default(0);
            $table->integer('alert_quantity');
            $table->string('sku', 191);
            $table->enum('barcode_type', ['C39', 'C128', 'EAN13', 'EAN8', 'UPCA', 'UPCE'])->nullable()->default('C128');
            $table->decimal('expiry_period', 4)->nullable();
            $table->enum('expiry_period_type', ['days', 'months'])->nullable();
            $table->tinyInteger('enable_sr_no')->default(0);
            $table->string('weight', 191)->nullable();
            $table->string('product_custom_field1', 191)->nullable();
            $table->string('product_custom_field2', 191)->nullable();
            $table->string('product_custom_field3', 191)->nullable();
            $table->string('product_custom_field4', 191)->nullable();
            $table->string('image', 191)->nullable();
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
        Schema::connection('mysql_pos')->drop('products', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
