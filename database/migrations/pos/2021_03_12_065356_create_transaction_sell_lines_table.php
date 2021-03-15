<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSellLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('transaction_sell_lines', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transaction_id')->index('transactions_transaction_sell_lines');
            // $table->foreign('transaction_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('variation_id')->index('variations_transaction_sell_lines');
            // $table->foreign('variation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->decimal('quantity', 20, 4);
            $table->decimal('unit_price_before_discount', 20)->default(0.00);
            $table->decimal('unit_price', 20)->nullable();
            $table->enum('line_discount_type', ['fixed', 'percentage'])->nullable();
            $table->decimal('line_discount_amount', 20)->default(0.00);
            $table->decimal('unit_price_inc_tax', 20)->nullable();
            $table->decimal('item_tax', 20)->nullable();
            $table->integer('tax_id')->nullable();
            $table->integer('lot_no_line_id')->nullable();
            $table->text('sell_line_note');
            $table->integer('parent_sell_line_id')->nullable();
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
        Schema::connection('mysql_pos')->drop('transaction_sell_lines');
    }
}
