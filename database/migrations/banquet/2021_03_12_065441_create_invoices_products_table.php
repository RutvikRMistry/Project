<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('invoice_id')->index('invoices_invoices_products');
            //$table->foreignid('invoice_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
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
        Schema::dropIfExists('invoices_products');
    }
}
