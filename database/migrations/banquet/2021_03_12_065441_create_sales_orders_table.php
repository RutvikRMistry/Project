<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sale_number', 191);
            $table->integer('customer_id')->index('customers_sales_orders');
            $table->integer('qtemplate_id')->nullable()->index('qtemplates_sales_orders');
            $table->date('date');
            $table->date('exp_date');
            $table->string('payment_term', 191);
            $table->integer('sales_person_id');
            $table->integer('sales_team_id')->index('sales_teams_sales_orders');
            $table->text('terms_and_conditions')->nullable();
            $table->string('status', 191);
            $table->double('total', 8, 2);
            $table->double('tax_amount', 8, 2);
            $table->double('grand_total', 8, 2);
            $table->double('discount', 8, 2);
            $table->double('final_price', 8, 2);
            $table->integer('user_id')->index('users_sales_orders');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('quotation_id')->index('quotations_sales_orders');
            $table->integer('is_delete_list');
            $table->integer('is_invoice_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_orders');
    }
}
