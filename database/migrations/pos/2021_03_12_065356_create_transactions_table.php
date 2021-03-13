<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_transactions');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('location_id');
            $table->unsignedBigInteger('res_table_id')->nullable()->index('res_table_id_transactions')->comment('fields to restaurant module');
            $table->foreignId('res_table_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('res_waiter_id')->nullable()->comment('fields to restaurant module');
            $table->enum('res_order_status', ['received', 'cooked', 'served'])->nullable();
            $table->enum('type', ['purchase', 'sell', 'expense', 'stock_adjustment', 'sell_transfer', 'purchase_transfer', 'opening_stock', 'sell_return', 'opening_balance'])->nullable();
            $table->enum('status', ['received', 'pending', 'ordered', 'draft', 'final']);
            $table->tinyInteger('is_quotation')->default(0);
            $table->enum('payment_status', ['paid', 'due', 'partial'])->nullable();
            $table->enum('adjustment_type', ['normal', 'abnormal'])->nullable();
            $table->integer('contact_id')->index('contacts_transactions');
            $table->foreignId('contact_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('customer_group_id')->nullable()->index('customer_groups_transactions')->comment('used to add customer group while selling');
            $table->foreignId('customer_group_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('invoice_no', 191)->nullable();
            $table->string('ref_no', 191)->nullable();
            $table->dateTime('transaction_date');
            $table->decimal('total_before_tax', 20)->default(0.00);
            $table->integer('tax_id')->nullable();
            $table->decimal('tax_amount', 20)->default(0.00);
            $table->enum('discount_type', ['fixed', 'percentage'])->nullable();
            $table->string('discount_amount', 10)->nullable();
            $table->string('shipping_details', 191)->nullable();
            $table->decimal('shipping_charges', 20)->default(0.00);
            $table->text('additional_notes');
            $table->text('staff_note');
            $table->decimal('final_total', 20)->default(0.00);
            $table->integer('expense_category_id')->nullable();
            $table->integer('expense_for')->nullable();
            $table->integer('commission_agent')->nullable();
            $table->string('document', 191)->nullable();
            $table->tinyInteger('is_direct_sale')->default(0);
            $table->decimal('exchange_rate', 20, 3)->default(1.000);
            $table->decimal('total_amount_recovered', 20)->nullable()->comment('Used for stock adjustment.');
            $table->integer('transfer_parent_id')->nullable();
            $table->integer('opening_stock_product_id')->nullable();
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
        Schema::connection('mysql_pos')->drop('transactions');
    }
}
