<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('invoice_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->text('header_text');
            $table->string('invoice_no_prefix', 191)->nullable();
            $table->string('quotation_no_prefix', 191)->nullable();
            $table->string('invoice_heading', 191)->nullable();
            $table->string('sub_heading_line1', 191)->nullable();
            $table->string('sub_heading_line2', 191)->nullable();
            $table->string('sub_heading_line3', 191)->nullable();
            $table->string('sub_heading_line4', 191)->nullable();
            $table->string('sub_heading_line5', 191)->nullable();
            $table->string('invoice_heading_not_paid', 191)->nullable();
            $table->string('invoice_heading_paid', 191)->nullable();
            $table->string('quotation_heading', 191)->nullable();
            $table->string('sub_total_label', 191)->nullable();
            $table->string('discount_label', 191)->nullable();
            $table->string('tax_label', 191)->nullable();
            $table->string('total_label', 191)->nullable();
            $table->string('total_due_label', 191)->nullable();
            $table->string('paid_label', 191)->nullable();
            $table->tinyInteger('show_client_id')->default(0);
            $table->string('client_id_label', 191)->nullable();
            $table->string('client_tax_label', 191)->nullable();
            $table->string('date_label', 191)->nullable();
            $table->tinyInteger('show_time')->default(1);
            $table->tinyInteger('show_brand')->default(0);
            $table->tinyInteger('show_sku')->default(1);
            $table->tinyInteger('show_cat_code')->default(1);
            $table->tinyInteger('show_expiry')->default(0);
            $table->tinyInteger('show_lot')->default(0);
            $table->tinyInteger('show_sale_description')->default(0);
            $table->string('sales_person_label', 191)->nullable();
            $table->tinyInteger('show_sales_person')->default(0);
            $table->string('table_product_label', 191)->nullable();
            $table->string('table_qty_label', 191)->nullable();
            $table->string('table_unit_price_label', 191)->nullable();
            $table->string('table_subtotal_label', 191)->nullable();
            $table->string('cat_code_label', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->tinyInteger('show_logo')->default(0);
            $table->tinyInteger('show_business_name')->default(0);
            $table->tinyInteger('show_location_name')->default(1);
            $table->tinyInteger('show_landmark')->default(1);
            $table->tinyInteger('show_city')->default(1);
            $table->tinyInteger('show_state')->default(1);
            $table->tinyInteger('show_zip_code')->default(1);
            $table->tinyInteger('show_country')->default(1);
            $table->tinyInteger('show_mobile_number')->default(1);
            $table->tinyInteger('show_alternate_number')->default(0);
            $table->tinyInteger('show_email')->default(0);
            $table->tinyInteger('show_tax_1')->default(1);
            $table->tinyInteger('show_tax_2')->default(0);
            $table->tinyInteger('show_barcode')->default(0);
            $table->tinyInteger('show_payments')->default(0);
            $table->tinyInteger('show_customer')->default(0);
            $table->string('customer_label', 191)->nullable();
            $table->string('highlight_color', 10)->nullable();
            $table->text('footer_text');
            $table->text('module_info');
            $table->tinyInteger('is_default')->default(0);

            $table->unsignedBigInteger('business_id')->index('business_invoice_layouts');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->string('design', 256)->nullable()->default('classic');
            $table->string('cn_heading', 191)->nullable()->comment('cn = credit note');
            $table->string('cn_no_label', 191)->nullable();
            $table->string('cn_amount_label', 191)->nullable();
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
        Schema::connection('mysql_pos')->drop('invoice_layouts');
    }
}
