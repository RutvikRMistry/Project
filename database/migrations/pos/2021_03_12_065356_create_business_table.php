<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('business', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);

            $table->unsignedBigInteger('currency_id')->index('currencies_business');
            $table->foreignId('currency_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->date('start_date')->nullable();
            $table->string('tax_number_1', 100)->nullable();
            $table->string('tax_label_1', 10)->nullable();
            $table->string('tax_number_2', 100)->nullable();
            $table->string('tax_label_2', 10)->nullable();
            $table->integer('default_sales_tax')->nullable();
            $table->double('default_profit_percent', 5, 2)->default(0.00);
            $table->integer('owner_id');
            $table->string('time_zone', 191)->default('Asia/Kolkata');
            $table->tinyInteger('fy_start_month')->default(1);
            $table->enum('accounting_method', ['fifo', 'lifo', 'avco'])->default('fifo');
            $table->decimal('default_sales_discount', 20)->nullable();
            $table->enum('sell_price_tax', ['includes', 'excludes'])->default('includes');
            $table->string('logo', 191)->nullable();
            $table->string('sku_prefix', 191)->nullable();
            $table->tinyInteger('enable_product_expiry')->default(0);
            $table->enum('expiry_type', ['add_expiry', 'add_manufacturing'])->default('add_expiry');
            $table->enum('on_product_expiry', ['keep_selling', 'stop_selling', 'auto_delete'])->default('keep_selling');
            $table->integer('stop_selling_before')->comment('Stop selling expied item n days before expiry');
            $table->tinyInteger('enable_tooltip')->default(1);
            $table->tinyInteger('purchase_in_diff_currency')->default(0)->comment('Allow purchase to be in different currency then the business currency');
            $table->integer('purchase_currency_id')->nullable();
            $table->decimal('p_exchange_rate', 20, 3)->default(1.000);
            $table->integer('transaction_edit_days')->default(30);
            $table->integer('stock_expiry_alert_days')->default(30);
            $table->text('keyboard_shortcuts');
            $table->text('pos_settings');
            $table->tinyInteger('enable_brand')->default(1);
            $table->tinyInteger('enable_category')->default(1);
            $table->tinyInteger('enable_sub_category')->default(1);
            $table->tinyInteger('enable_price_tax')->default(1);
            $table->tinyInteger('enable_purchase_status')->nullable()->default(1);
            $table->tinyInteger('enable_lot_number')->default(0);
            $table->integer('default_unit')->nullable();
            $table->tinyInteger('enable_racks')->default(0);
            $table->tinyInteger('enable_row')->default(0);
            $table->tinyInteger('enable_position')->default(0);
            $table->tinyInteger('enable_editing_product_from_purchase')->default(1);
            $table->enum('sales_cmsn_agnt', ['logged_in_user', 'user', 'cmsn_agnt'])->nullable();
            $table->tinyInteger('item_addition_method')->default(1);
            $table->tinyInteger('enable_inline_tax')->default(1);
            $table->enum('currency_symbol_placement', ['before', 'after'])->default('before');
            $table->text('enabled_modules');
            $table->string('date_format', 191)->default('m/d/Y');
            $table->enum('time_format', ['12', '24'])->default('24');
            $table->text('ref_no_prefixes');
            $table->char('theme_color', 20)->nullable();
            $table->integer('created_by')->nullable();
            $table->tinyInteger('is_active')->default(1);
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
        Schema::connection('mysql_pos')->drop('business');
    }
}
