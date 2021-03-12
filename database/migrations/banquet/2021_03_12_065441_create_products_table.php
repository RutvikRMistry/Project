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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('product_name', 191);
            $table->string('product_image', 191)->nullable();
            $table->integer('category_id')->index('categories_products');
            $table->string('product_type', 191);
            $table->string('status', 191)->nullable();
            $table->integer('quantity_on_hand');
            $table->integer('quantity_available');
            $table->double('sale_price', 8, 2);
            $table->text('description')->nullable();
            $table->text('description_for_quotations');
            $table->integer('user_id')->index('users_products');
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
        Schema::dropIfExists('products');
    }
}
