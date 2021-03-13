<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('purchase_lines', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transaction_id')->index('transactions_purchase_lines');
            $table->foreignId('transaction_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('variation_id')->index('variations_purchase_lines');
            $table->foreignId('variation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->decimal('quantity', 20, 4);
            $table->decimal('pp_without_discount', 20)->default(0.00)->comment('Purchase price before inline discounts');
            $table->decimal('discount_percent', 5)->default(0.00)->comment('Inline discount percentage');
            $table->decimal('purchase_price', 20)->nullable();
            $table->decimal('purchase_price_inc_tax', 20)->default(0.00);
            $table->decimal('item_tax', 20)->nullable();
            $table->integer('tax_id')->nullable();
            $table->decimal('quantity_sold', 20, 4)->nullable()->default(0.0000);
            $table->decimal('quantity_adjusted', 20, 4)->nullable()->default(0.0000);
            $table->date('mfg_date')->nullable();
            $table->date('exp_date')->nullable();
            $table->string('lot_number', 256)->nullable();
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
        Schema::connection('mysql_pos')->drop('purchase_lines');
    }
}
