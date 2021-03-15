<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('quotation_id')->index('quotations_quotations_products');
            //$table->foreignid('quotation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->index('products_quotations_products');
            //$table->foreignid('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('product_name', 191);
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->double('price', 8, 2);
            $table->double('sub_total', 8, 2);
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
        Schema::dropIfExists('quotations_products');
    }
}
