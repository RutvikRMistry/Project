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
            $table->id();
            $table->string('name', 191);

            $table->unsignedBigInteger('business_id')->index('business_products');
            // $table->foreign('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->enum('type', ['single', 'variable', 'modifier'])->nullable();

            $table->unsignedBigInteger('unit_id')->nullable()->index('units_products');
            // $table->foreign('unit_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('brand_id')->nullable()->index('brandsproducts');
            // $table->foreign('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('category_id')->nullable()->index('categories_products');
            // $table->foreign('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::connection('mysql_pos')->drop('products');
    }
}
